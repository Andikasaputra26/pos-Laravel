<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\Product;
use App\Models\KategoriProduct;
use App\Models\Pembelian;
use App\Models\PembelianItem;
use App\Models\Setting;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $kategori = KategoriProduct::all();
        $customer = Customers::all();

        return view('pembelian.index', compact('product', 'kategori', 'customer'));
    }

    public function store(Request $request)
    {
        $data = json_decode($request->pembelian, true);
        $pembelian = Pembelian::create($data['pembelian']);
        if ($pembelian) {
            foreach ($data['products'] as $item) {
                $item['id_pembelian'] = $pembelian->id;
                PembelianItem::create($item);
            }
        }

        return redirect()->route('pembelian');
    }

    public function getAll()
    {
        $pembelian = PembelianItem::all();
    }
    public function getGrouped()
    {
        $pembelian = Pembelian::all();
        // @foreach($pembelian as $table)
        // <table>
        //      @foreach($table->item_pembelian() as $item)
        //      <tr>{{ $item->product->name_product }}</tr>
        //      @endforeach
        // </table>
        // @endforeach
        // 
    }
}
