@extends('layout.app')

@section('content')


<div class="container mt-2">
    <h2>Tambah Data Warga</h2>

    <form action="{{ route('admin.daftarmakanan.store') }}" method="post" enctype="multipart/form-data">
        @csrf

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
            <input type="text" class="form-control" id="Status" name="Status" required></input>
        </div>

        <div class="form-group my-2">
            <label for="Agama">Agama</label>
            <input type="text" class="form-control" id="Agama" name="Agama" required></input>
        </div>

        <div class="form-group my-2 form-control">
            <label for="gambar">Foto</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection