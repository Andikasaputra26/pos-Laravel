<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomerController extends Controller
{


    public function index()
    {
        $customer = Customers::all();
        return view('customer.index', compact('customer'));
    }

    public function tambah()
    {
        return view('customer.create');
    }

    public function simpan(Request $request)
    {
        Customers::create([
            'kode_customers' => $request->kode_customers,
            'name_customers' => $request->name_customers,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);
        return redirect()->route('customer')->with('success', 'Data Customer berhasil ditambahkan');
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        return view('customer.edit', ['customer' => $customer]);
    }

    public function update($id, Request $request)
    {
        Customers::find($id)->update([
            'kode_customers' => $request->kode_customers,
            'name_customers' => $request->name_customers,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'address' => $request->address
        ]);

        return redirect()->route('customer')->with('success', 'Data Customer berhasil diedit');
    }

    public function hapus($id)
    {
        Customers::find($id)->delete();
        return redirect()->route('customer')->with('success', 'Data Customer berhasil dihapus');
    }
}
