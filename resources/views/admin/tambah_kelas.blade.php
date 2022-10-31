@extends('layouts.admin')
@section('content')
    <div class="container-xl px-4 mt-n10">
        <h1 class="h3 mb-0 text-gray-800">Tambah Program Kelas</h1>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">
                        <form action="{{ route('kelas.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="nama_kelas">Nama Program Kelas</label>
                                <input type="text" id="nama_kelas" name="nama_kelas" class="form-control" placeholder="Masukkan Nama Program Kelas" value="">
                                @error('nama_kelas')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="harga">Harga</label>
                                <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga Program Kelas" value="">
                                @error('harga')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="deskripsi">Deskripsi Program Kelas</label>
                                <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Deskripsi Program Kelas" value="" ></textarea>
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="gambar">Foto</label>
                                <input class="form-control" type="file" id="gambar" name="gambar">
                                @error('gambar')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Simpan Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
