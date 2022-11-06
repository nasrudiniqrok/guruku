@extends('layouts.admin')
@section('content')
    <div class="container-xl px-4 mt-n10">
        <h1 class="h3 mb-0 text-gray-800">Edit Artikel</h1>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">
                        <form action="{{ route('tentang.update',$tentang->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="small mb-1" for="judul">Judul Artikel</label>
                                <input type="text" id="judul" name="judul" class="form-control" placeholder="Masukkan Nama" value="{{ $tentang->judul }}">
                                @error('judul')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="tgl">Tanggal</label>
                                <input type="date" id="tgl" name="tgl" class="form-control" value="{{ $tentang->tgl }}">
                                @error('tgl')
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
                            <div class="form-group">
                                <img src="{{ Storage::url($tentang->gambar) }}" height="200" width="200" alt="gambar"/>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="deskripsi">Deskripsi Artikel</label>
                                <textarea name="deskripsi" id="deskripsi" rows="25" class="form-control" value="{{ $tentang->deskripsi }}" >{{ $tentang->deskripsi }}</textarea>
                                @error('deskripsi')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
