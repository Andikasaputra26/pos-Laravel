<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $account = User::all();
        return view('user.index', compact('account'));
    }

    public function tambah()
    {
        return view('user.create');
    }

    public function simpan(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->level = $request->input('level');
        $user->save();
        return redirect()->route('user')->with('success', 'Data User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return  view('user.edit', ['user' => $user]);
    }

    public function update($id, Request $request)
    {
        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'level' => $request->level
        ]);

        return redirect()->route('user')->with('success', 'Data User berhasil diedit');
    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->route('user')->with('success', 'Data User berhasil dihapus');
    }
}
