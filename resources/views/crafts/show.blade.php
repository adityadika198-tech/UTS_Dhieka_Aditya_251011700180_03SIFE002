@extends('layouts.app')

@section('title', 'Detail Produk - KaryaNusa')

@section('content')
<div class="container py-5">
    <a href="{{ route('crafts.index') }}" class="btn btn-outline-dark mb-4">
        Kembali ke Daftar Produk
    </a>

    <div class="card shadow-sm">
        <div class="row g-0">
            <div class="col-md-6">
                @if ($craft->image)
                    <img
                        src="{{ asset('assets/images/' . $craft->image) }}"
                        class="img-fluid w-100"
                        alt="{{ $craft->name }}"
                        style="height:400px; object-fit:contain; background:#fff;"
                    >
                @endif
            </div>

            <div class="col-md-6">
                <div class="card-body p-4">
                    <h1 class="h3 fw-bold">{{ $craft->name }}</h1>
                    <p class="text-muted">Perajin: {{ $craft->artisan }}</p>
                    <p>Bahan: {{ $craft->material }}</p>

                    <h3 class="text-success fw-bold">
                        Rp {{ number_format($craft->price, 0, ',', '.') }}
                    </h3>

                    <hr>
                    <h5>Deskripsi Produk</h5>
                    <p>{{ $craft->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
