@extends('layouts.admin')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
    <a href="{{ route('tentang.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> Tambah Artikel</a>
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
            @forelse ($tentang as $tg)
                <div class="col mt-3">
                    <div class="card">
                        <h4 class="card-title">{{ $tg->judul }}</h4>
                        <img class="card-img-top" src="{{ Storage::url($tg->gambar) }}" height="200">
                        <div class="card-body">
                            <p class="card-text">{{ $tg->tgl }}</p>
                            <p class="card-text">{{ substr($tg->deskripsi, 0, 100) }} ...</p>

                            <div class="btn-action">
                                <form action="{{ route('tentang.destroy',$tg->id) }}" method="POST">
                                    <a href="{{ route('tentang.edit',$tg->id) }}" class="btn btn-info">Edit</a>

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
