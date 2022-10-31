<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KelasController extends Controller
{
    public function index()
    {
        $data['kelas'] = Kelas::all();

        return view('kelas', $data);
    }

    public function kelas()
    {
        $data['kelas'] = Kelas::all();
        return view('admin.kelas', $data);
    }

    public function tambah_kelas()
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
        $post = new Kelas();
        $post->nama_kelas =$request->nama_kelas;
        $post->harga = $request->harga;
        $post->deskripsi = $request->deskripsi;
        $post->gambar = $path;
        $post->save();

        return redirect()->route('kelas.kelas')->with('status', 'Data Telah di Simpan');
    }


    public function edit(Kelas $kelas)
    {
        return view('admin.edit_kelas',compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kelas' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
        ]);

        $post = Kelas::find($id);

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

        return redirect()->route('kelas.kelas')
        ->with('status', ' Data Berhasil Diubah');
    }

    public function destroy(Kelas $kelas)
    {
    $avatar = Kelas::findOrFail($kelas->id);

    if(Storage::delete($avatar->gambar)) {
        $avatar->delete();
    }

    return redirect()->route('kelas.kelas')
        ->with('status','Data Berhasil Dihapus');
    }
}
