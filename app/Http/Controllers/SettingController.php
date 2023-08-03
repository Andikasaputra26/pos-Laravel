<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::get();
        return view('setting.index', ['setting' => $setting]);
    }

    public function tambah()
    {
        return view('setting.form');
    }

    public function simpan(Request $request)
    {
        Setting::create(['diskon' => $request->diskon]);
        return redirect()->route('setting')->with('success', 'Data setting Berhasil ditambahkan');
    }

    public function edit($id)
    {
        $setting = Setting::find($id);
        return view('setting.form', ['setting' => $setting]);
    }

    public function update($id, Request $request)
    {
        Setting::find($id)->update(['diskon' => $request->diskon]);
        return redirect()->route('setting')->with('success', 'Data setting Berhasil diedit');
    }

    public function hapus($id)
    {
        Setting::find($id)->delete();
        return redirect()->route('setting')->with('success', 'Data setting Berhasil dihapus');
    }
}
