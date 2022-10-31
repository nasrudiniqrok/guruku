<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminalbumController extends Controller
{

    public function index()
    {
        $data['albums'] = Album::all();
        return view('admin.album', $data);
    }

    public function tambah_album()
    {
        return view('admin.tambah_album');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $path = $request->file('gambar')->store('public/album');
        $post = new Album;
        $post->nama =$request->nama;
        $post->kategori = $request->kategori;
        $post->gambar = $path;
        $post->save();

        return redirect()->route('admin.index')->with('Berhasil', 'Data Telah di Simpan');
    }

    public function edit(Album $album)
    {
        return view('admin.edit_album',compact('album'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
        ]);

        $post = Album::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            ]);

            $path = $request->file('gambar')->store('public/album');
            $post->gambar = $path;

        }

        $post->nama = $request->nama;
        $post->kategori = $request->kategori;
        $post->save();

        return redirect()->route('admin.index')
        ->with('Berhasil', ' Data Berhasil Diubah');
    }

    public function destroy(Album $album)
    {
    $avatar = Album::findOrFail($album->id);

    if(Storage::delete($avatar->gambar)) {
        $avatar->delete();
    }

    return redirect()->route('admin.index')
        ->with('Berhasil','Data Berhasil Dihapus');
    }
}
