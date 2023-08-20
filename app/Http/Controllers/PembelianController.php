<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Setting;
use App\Models\Customers;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use App\Models\PembelianItem;
use App\Models\KategoriProduct;
use Illuminate\Support\Facades\DB;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = KategoriProduct::all();
        $customer = Customers::all();
        $setting = Setting::all();

        return view('pembelian.index', compact('product', 'kategori', 'customer', 'setting'));
    }

    public function store(Request $request)
    {
        $data = json_decode($request->pembelian, true);
        // dd($data);
        $pembelian = Pembelian::create($data['pembelian']);
        if ($pembelian) {
            // dd($pembelian->get(et());
            foreach ($data['products'] as $item) {
                $item['id_pembelian'] = $pembelian->id;
                // dd($item);
                PembelianItem::create($item);
                // dd($ss);
                // Set your Merchant Server Key
                \Midtrans\Config::$serverKey = config('midtrans.server_key');
                // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                \Midtrans\Config::$isProduction = false;
                // Set sanitization on (default)
                \Midtrans\Config::$isSanitized = true;
                // Set 3DS transaction for credit card to true
                \Midtrans\Config::$is3ds = true;

                $params = array(
                    'transaction_details' => array(
                        'order_id' => rand(),
                        'gross_amount' => $pembelian->subtotal,
                    ),
                    'customer_details' => array(
                        'first_name' => $pembelian->id_customers,
                        'last_name' => '',
                    ),
                );
                $snapToken = \Midtrans\Snap::getSnapToken($params);

                $product = DB::table('product')
                    ->join('pembelian_item', 'product.id', '=', 'pembelian_item.id_product')
                    ->select('product.id', 'product.stock', 'pembelian_item.jumlah_item')
                    ->where("product.id", "=", $item["id_product"])
                    ->first();

                // dd($product);
                if ($product) {
                    $new = ((int) $product->stock) - $item['jumlah_item'];
                    // dd($new);
                    DB::table('product')->where('id', $product->id)->update(["stock" => $new]);
                }
                // dd($product);
            }
        }
        return view('pembelian.checkout', compact('snapToken', 'pembelian', 'product'));
    }

    // public function getAll()
    // {
    //     $pembelian = PembelianItem::all();
    // }
    // public function getGrouped()
    // {
    //     $pembelian = Pembelian::all();
    // @foreach($pembelian as $table)
    // <table>
    //      @foreach($table->item_pembelian() as $item)
    //      <tr>{{ $item->product->name_product }}</tr>
    //      @endforeach
    // </table>
    // @endforeach
    // }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash("SHA512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
                $pembelian = Pembelian::find($request->order_id);
                $pembelian->update(['status' => 'Paid']);
            }
        }
    }

    public function invoice($id)
    {
        $pembelian = Pembelian::with($id);
        return view('pembelian.invoice', compact('pembelian'));
    }
}
