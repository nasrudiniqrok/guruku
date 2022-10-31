@extends('layouts.admin')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Album Foto</h1>
        <a href="{{ url('admin/album/tambah') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Tambah Foto</a>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    {{-- Proses looping untuk menampilkan semua user --}}
    <section id="member-list" class="py-5 bg-light text-center">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                @forelse ($albums as $album)
                    <div class="col mt-3">
                        <div class="card">
                            <img class="card-img-top" src="{{ Storage::url($album->gambar) }}" height="200" width="150">
                            <div class="card-body">
                                <h5 class="card-title">{{ $album->nama }}</h5>
                                <p class="card-text">{{ $album->kategori }}</p>

                                {{-- tombol edit & hapus hanya untuk user sendiri atau admin --}}
                                <div class="btn-action">
                                    <form action="{{ route('albums.destroy',$album->id) }}" method="POST">
                                        <a href="{{ route('albums.edit',$album->id) }}" class="btn btn-info">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Tidak Ada Data...</p>
                @endforelse
            </div>
        </div>
    </section>

@endsection
