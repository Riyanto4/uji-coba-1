@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Menu Makanan</h2>
    <div class="row">
        @foreach($menus as $menu)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <!-- Ganti URL gambar dengan path sesuai dengan struktur penyimpanan gambar Anda -->
                    <img src="{{ asset('foto/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->nama_menu }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                        <p class="card-text">{{ $menu->deskripsi }}</p>
                        <p class="card-text">Rp. {{ $menu->harga }}</p>
                        <a href="{{ route('menu.addToCart', ['id' => $menu->id]) }}" class="btn btn-primary">Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
