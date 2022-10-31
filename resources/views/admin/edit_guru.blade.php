@extends('layouts.admin')
@section('content')
    <div class="container-xl px-4 mt-n10">
        <h1 class="h3 mb-0 text-gray-800">Edit Profil Guru</h1>
        @if (session('status'))
            <div class="alert alert-success mb-1 mt-1">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8">
                        <form action="{{ route('gurus.update',$guru->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label class="small mb-1" for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{ $guru->nama }}">
                                @error('nama')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="jenis_guru">Mata Pelajaran</label>
                                <input type="text" id="jenis_guru" name="jenis_guru" class="form-control" placeholder="Mata Pelajaran" value="{{ $guru->jenis_guru }}">
                                @error('jenis_guru')
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
                                <img src="{{ Storage::url($guru->gambar) }}" height="200" width="200" alt="gambar"/>
                            </div>

                            <button class="btn btn-primary" type="submit">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
