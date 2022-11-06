@extends('layouts.admin')
@section('content')
    <div class="container-xl px-4 mt-n10">
        <h1 class="h3 mb-0 text-gray-800">Tambah Artikel</h1>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">
                        <form action="{{ route('tentang.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="judul">Judul Artikel</label>
                                <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukan Nama Judul Artikel" value="">
                                @error('judul')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="tgl">Tanggal</label>
                                <input type="date" id="tgl" name="tgl" class="form-control" value="">
                                @error('harga')
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
                            <div class="mb-3">
                                <label class="small mb-1" for="deskripsi">Deskripsi Program Kelas</label>
                                <textarea name="deskripsi" id="deskripsi" rows="25" class="form-control" placeholder="Deskripsi Program Kelas" value="" ></textarea>
                                @error('deskripsi')
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
