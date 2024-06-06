@extends('layout.app')

@section('content')


<div id="page-content-wrapper">
    <div class="container-fluid">
        <h1 class="mt-4">Daftar Warga </h1>

        <a href="{{ route('admin.daftarmakanan.create') }}" class="btn btn-primary">Tambah Data</a>

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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menus as $menu)
                <tr>
                    <td>{{ $menu->NIK }}</td>
                    <td>{{ $menu->Nama }}</td>
                    <td>{{ $menu->Tempat_Lahir }}</td>
                    <td>{{ $menu->Tanggal_Lahir }}</td>
                    <td>{{ $menu->Alamat }}</td>
                    <td>{{ $menu->Status }}</td>
                    <td>{{ $menu->Agama }}</td>
                    <td>
                        <!-- Menampilkan gambar menggunakan tag img -->
                        <img src="{{ asset('foto/' . $menu->image) }}" alt="{{ $menu->nama_menu }}" style="max-width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('admin.daftarmakanan.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.daftarmakanan.destroy', $menu->id) }}" method="post" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection