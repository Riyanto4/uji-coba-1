@extends('layout.app')

@section('content')


<div id="page-content-wrapper">
    <div class="container-fluid">
        <h1 class="mt-4">Edit Data Warga</h1>

        <form action="{{ route('admin.daftarmakanan.update', $menu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group my-2">
                <label for="NIK">NIK</label>
                <input type="text" class="form-control" id="NIK" name="NIK" required>
            </div>

            <div class="form-group my-2">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" id="Nama" name="Nama" required>
            </div>

            <div class="form-group my-2">
                <label for="Tempat Lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="Tempat Lahir" name="Tempat Lahir" required>
            </div>

            <div class="form-group my-2">
                <label for="Tanggal Lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="Tanggal Lahir" name="Tanggal Lahir" required>
            </div>

            <div class="form-group my-2">
                <label for="Alamat">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" required>
            </div>

            <div class="form-group my-2">
                <label for="Status">Status</label>
                <input type="text" class="form-control" id="Status" name="Status" rows="3" required></input>
            </div>

            <div class="form-group my-2">
                <label for="Agama">Agama</label>
                <input type="text" class="form-control" id="Agama" name="Agama" rows="3" required></input>
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