<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnggotaController extends Controller
{
    public function index()
    {
        $data['gurus'] = Guru::all();
        return view('anggota', $data);
    }

    public function guru()
    {
        $data['gurus'] = Guru::all();
        return view('admin.guru', $data);
    }

    public function tambah_guru()
    {
        return view('admin.tambah_profil');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_guru' => 'required',
            'gambar' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        $path = $request->file('gambar')->store('public/guru');
        $post = new Guru;
        $post->nama =$request->nama;
        $post->jenis_guru = $request->jenis_guru;
        $post->gambar = $path;
        $post->save();

        return redirect()->route('gurus.guru')->with('Berhasil', 'Data Telah di Simpan');
    }

    public function edit(Guru $guru)
    {
        return view('admin.edit_guru',compact('guru'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jenis_guru' => 'required',
        ]);

        $post = Guru::find($id);

        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:png,jpg,jpeg,gif,svg',
            ]);

            $path = $request->file('gambar')->store('public/guru');
            $post->gambar = $path;

        }

        $post->nama = $request->nama;
        $post->jenis_guru = $request->jenis_guru;
        $post->save();

        return redirect()->route('gurus.guru')
        ->with('Berhasil', ' Data Berhasil Diubah');
    }

    public function destroy(Guru $guru)
    {
    $avatar = Guru::findOrFail($guru->id);

    if(Storage::delete($avatar->gambar)) {
        $avatar->delete();
    }

    return redirect()->route('gurus.guru')
        ->with('Berhasil','Data Berhasil Dihapus');
    }
}
