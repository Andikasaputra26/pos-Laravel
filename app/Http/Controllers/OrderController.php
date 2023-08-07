<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\PembelianItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        $pembelianItem = PembelianItem::select('jumlah_item')->get();

        return view('order.index', compact('pembelian', 'pembelianItem'));
    }

    public function hapus($id)
    {
        Pembelian::find($id)->delete();
        PembelianItem::find($id)->delete();
        return redirect()->route('order')->with('success', 'Data Orderan Berhasil dihapus');
    }
}
