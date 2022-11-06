<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function tentang()
    {
        $data['tentang'] = Artikel::all();
        return view('tentang', $data);
    }

    public function detail($tentang)
    {
        $data['tentang'] = Artikel::find($tentang);
        return view('artikel',  $data);
    }

    public function index()
    {
        $data['tentang'] = Artikel::all();
        return view('admin.tentang', $data);
    }

    public function create()
    {
        return view('admin.tambah_tentang');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'tgl' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $path = $request->file('gambar')->store('public/artikel');
        $post = new Artikel();
        $post->judul =$request->judul;
        $post->tgl = $request->tgl;
        $post->gambar = $path;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->route('tentang.index')->with('Berhasil', 'Data Telah di Simpan');
    }

    public function edit(Artikel $tentang)
    {
        return view('admin.edit_artikel',compact('tentang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'tgl' => 'required',
            'deskripsi' => 'required',
        ]);

        $post = Artikel::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            ]);

            $path = $request->file('gambar')->store('public/artikel');
            $post->gambar = $path;

        }

        $post->judul = $request->judul;
        $post->tgl = $request->tgl;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->route('tentang.index')
        ->with('Berhasil', ' Data Berhasil Diubah');
    }

    public function destroy(Artikel $tentang)
    {
    $avatar = Artikel::findOrFail($tentang->id);

    if(Storage::delete($avatar->gambar)) {
        $avatar->delete();
    }

    return redirect()->route('tentang.index')
        ->with('Berhasil','Data Berhasil Dihapus');
    }
}
