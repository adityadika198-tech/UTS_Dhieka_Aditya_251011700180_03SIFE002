@extends('layouts.app')

@section('title', 'Daftar Produk - KaryaNusa')

@section('content')
<header class="bg-warning-subtle py-5">
    <div class="container">
        <h1 class="fw-bold">Kerajinan Lokal Indonesia</h1>
        <p class="mb-0">Temukan kerajinan unik buatan para perajin lokal.</p>
    </div>
</header>

<div class="container py-5">
    <h2 class="mb-4">Daftar Produk Kerajinan</h2>

    <div class="row g-4">
        @forelse ($crafts as $craft)
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    @if ($craft->image)
                        <img
                            src="{{ asset('assets/images/' . $craft->image) }}"
                            class="card-img-top"
                            alt="{{ $craft->name }}"
                            style="height:220px; object-fit:contain; background:#fff;"
                        >
                    @endif

                    <div class="card-body">
                        <h5 class="card-title">{{ $craft->name }}</h5>
                        <p class="text-muted mb-1">Perajin: {{ $craft->artisan }}</p>
                        <p class="text-muted">Bahan: {{ $craft->material }}</p>

                        <p class="fw-bold text-success">
                            Rp {{ number_format($craft->price, 0, ',', '.') }}
                        </p>

                        <p>{{ $craft->description }}</p>

                        <a href="{{ route('crafts.show', $craft->id) }}"
                           class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>Belum ada produk kerajinan.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
