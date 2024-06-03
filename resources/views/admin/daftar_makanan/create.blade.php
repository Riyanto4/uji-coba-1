@extends('layout.app')

@section('content')


<div class="container mt-4">
    <h2>Tambah Data Warga</h2>

    <form action="{{ route('admin.daftarmakanan.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group my-2">
            <label for="nama_menu">NIK</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
        </div>

        <div class="form-group my-2">
            <label for="nama_menu">Nama</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
        </div>

        <div class="form-group my-2">
            <label for="harga">Tempat, Tanggal Lahir</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group my-2">
            <label for="kategori">Alamat</label>
            <input type="text" class="form-control" id="" name="" required>
        </div>

        <div class="form-group my-2">
            <label for="deskripsi">Status</label>
            <input class="form-control" id="deskripsi" name="deskripsi" rows="3" required></input>
        </div>

        <div class="form-group my-2">
            <label for="deskripsi">Agama</label>
            <input class="form-control" id="deskripsi" name="deskripsi" rows="3" required></input>
        </div>

        <div class="form-group my-2 form-control">
            <label for="gambar">Foto</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection