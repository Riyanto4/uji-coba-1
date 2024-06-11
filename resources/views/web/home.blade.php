@extends('layout.app')

@section('content')

<div class="container mt-5">
    <h2 class="mb-4">Data Sensus Warga</h2>
    <div class="row">
        <table class="table table-bordered mt-3">
            <thead class="thead-dark">
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Agama</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu->NIK }}</td>
                    <td>
                        <!-- Menampilkan gambar menggunakan tag img -->
                        <img src="{{ asset('foto/' . $menu->image) }}" alt="{{ $menu->nama_menu }}" style="max-width: 50px;">
                    </td>
                    <td>{{ $menu->Nama }}</td>
                    <td>{{ $menu->Tempat_Lahir }}</td>
                    <td>{{ $menu->Tanggal_Lahir }}</td>
                    <td>{{ $menu->Alamat }}</td>
                    <td>{{ $menu->Status }}</td>
                    <td>{{ $menu->Agama }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- @foreach($menus as $menu)
        <div class="col-md-4 mb-4">
            <div class="card"> -->
        <!-- Ganti URL gambar dengan path sesuai dengan struktur penyimpanan gambar Anda -->
        <!-- <img src="{{ asset('foto/' . $menu->image) }}" class="card-img-top" alt="{{ $menu->nama_menu }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $menu->nama_menu }}</h5>
                    <p class="card-text">{{ $menu->deskripsi }}</p>
                    <p class="card-text">Rp. {{ $menu->harga }}</p>
                    <a href="{{ route('menu.addToCart', ['id' => $menu->id]) }}" class="btn btn-primary">Pesan Sekarang</a>
                </div>
            </div>
        </div>
        @endforeach -->
    </div>
</div>

@endsection