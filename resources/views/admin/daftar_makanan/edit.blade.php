@extends('layout.app')

@section('content')


<div id="page-content-wrapper">
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data</h1>

        <form action="{{ route('admin.daftarmakanan.update', $menu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label for="nama_menu">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}" required>
            </div>

            <div class="form-group my-2">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $menu->harga }}" required>
            </div>

            <div class="form-group my-2">
                <label for="kategori">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="makanan" {{ $menu->kategori == 'makanan' ? 'selected' : '' }}>Makanan</option>
                    <option value="minuman" {{ $menu->kategori == 'minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
            </div>

            <div class="form-group my-2">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $menu->deskripsi }}</textarea>
            </div>

            <div class="form-group my-2 form-control">
                <label for="gambar">Gambar </label>
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>

            <!-- Tampilkan gambar saat ini -->
            <div class="form-group my-2">
                <label for="current_image">Gambar saat ini:</label>
                <img src="{{ asset('foto/' . $menu->image) }}" alt="{{ $menu->nama_menu }}" style="max-width: 200px;">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
</div>

@endsection
