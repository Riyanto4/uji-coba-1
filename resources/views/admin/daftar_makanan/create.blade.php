@extends('layout.app')

@section('content')


<div class="container mt-4">
    <h2>Tambah Makanan</h2>

    <form action="{{ route('admin.daftarmakanan.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group my-2">
            <label for="nama_menu">Nama Menu</label>
            <input type="text" class="form-control" id="nama_menu" name="nama_menu" required>
        </div>

        <div class="form-group my-2">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
        </div>

        <div class="form-group my-2">
            <label for="kategori">Kategori</label>
            <select class="form-control" id="kategori" name="kategori" required>
                <option value="makanan">Makanan</option>
                <option value="minuman">Minuman</option>
            </select>
        </div>

        <div class="form-group my-2">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>

        <div class="form-group my-2 form-control">
            <label for="gambar">Gambar </label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
