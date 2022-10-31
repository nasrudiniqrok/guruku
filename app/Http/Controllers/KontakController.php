<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'komentar' => 'required',
        ]);

        $post = new Kontak();
        $post->nama =$request->nama;
        $post->email = $request->email;
        $post->komentar = $request->komentar;
        $post->save();

        return redirect()->route('kontaks.index')->with('status', 'Data Telah di Simpan');
    }
}
