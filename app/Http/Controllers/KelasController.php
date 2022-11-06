<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Kelass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    public function kelas()
    {
        $data['kelas'] = Kelass::all();

        return view('kelas', $data);
    }

    public function index()
    {
        $data['kelas'] = Kelass::all();
        return view('admin.kelas', $data);
    }

    public function create()
    {
        return view('admin.tambah_kelas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $path = $request->file('gambar')->store('public/kelas');
        $post = new Kelass();
        $post->nama_kelas =$request->nama_kelas;
        $post->harga = $request->harga;
        $post->deskripsi = $request->deskripsi;
        $post->gambar = $path;
        $post->save();

        return redirect()->route('kelas.index')->with('status', 'Data Telah di Simpan');
    }


    public function edit($id)
    {
        $kelas = Kelass::find($id);
        return view('admin.edit_kelas',compact('kelas'));
        // return view('admin.edit_kelas',compact('kelas'));
    }

    public function update(Request $request, $kelas)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $post = Kelass::find($kelas);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            ]);

            $path = $request->file('gambar')->store('public/kelas');
            $post->gambar = $path;

        }

        $post->nama_kelas = $request->nama_kelas;
        $post->harga = $request->harga;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect()->route('kelas.index')
        ->with('status', ' Data Berhasil Diubah');
    }

    public function destroy($id)
    {
    $avatar = Kelass::findOrFail($id);

    if(Storage::delete($avatar->gambar)) {
        $avatar->delete();
    }

    return redirect()->route('kelas.index')
        ->with('status','Data Berhasil Dihapus');
    }
}
