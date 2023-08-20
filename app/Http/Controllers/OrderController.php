<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\PembelianItem;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $pembelian = DB::table('pembelian')
            ->select('pembelian.created_at', 'pembelian.id_customers', 'pembelian_item.jumlah_item', 'pembelian.subtotal', 'pembelian.diskon_customers', 'pembelian.total_harga')
            ->join('pembelian_item', 'pembelian.id', '=', 'pembelian_item.id_pembelian')
            ->get();
        // dd($pembelian);

        return view('order.index', compact('pembelian'));
    }

    public function hapus($id)
    {
        Pembelian::find($id)->delete();
        PembelianItem::find($id)->delete();
        return redirect()->route('order')->with('success', 'Data Orderan Berhasil dihapus');
    }
}
