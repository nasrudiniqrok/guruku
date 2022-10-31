@extends('layouts.admin')
@section('content')
    <div class="container-xl px-4 mt-n10">
        <h1 class="h3 mb-0 text-gray-800">Tambah Foto Album</h1>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">
                        <form action="{{ route('albums.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" value="">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label  class="small mb-1" for="kategori">Pilih Kategori</label>
                                <select class="form-control" id="kategori" name="kategori">
                                    <option value="" >Pilih Kategori</option>
                                    <option value="playing">Playing</option>
                                    <option value="drawing">Drawing</option>
                                    <option value="reading">Reading</option>
                                </select>
                                @error('kategori')
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
