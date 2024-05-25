@extends('layout.app')

@section('content')
   

    <div class="container mt-4">
        <h2>Daftar Pesanan</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Menu</th>
                    <th>Quantity</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                    <th>Aksi</th> <!-- Kolom untuk tombol tambah dan kurang -->
                </tr>
            </thead>
            <tbody>
                @php
                    $totalHarga = 0;
                @endphp

                {{-- Loop through daftar pesanan --}}
                @foreach ($daftarPesanan as $index => $pesanan)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $dataMenu[$index]->nama_menu }}</td>
                        <td>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <a href="{{ route('tambahQuantity', ['id' => $pesanan->id]) }}" class="btn btn-primary btn-sm">+</a>
                                </span>
                                <input type="text" class="form-control" value="{{ $pesanan->quantity }}" readonly>
                                <span class="input-group-btn">
                                    <a href="{{ route('kurangQuantity', ['id' => $pesanan->id]) }}" class="btn btn-danger btn-sm">-</a>
                                </span>
                            </div>
                        </td>
                        <td>{{ $dataMenu[$index]->harga }}</td>
                        <td>{{ $pesanan->quantity * $dataMenu[$index]->harga }}</td>
                        @php
                            $totalHarga += $pesanan->quantity * $dataMenu[$index]->harga;
                        @endphp
                        <td>
                            <a href="{{ route('hapusDaftarPesanan', ['index' => $index + 1]) }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            <p>Total Harga yang Harus Dibayar di Kasir: <strong>Rp. {{ $totalHarga }}</strong></p>
        </div>

        <div class="d-flex justify-content-end">
        <button class="btn btn-success" onclick="showMessageSuccess()">PROSES</button> 
        </div>
    </div>

    <script>
        function     showMessageSuccess() {
            alert('Berhasil!. Pesanan sudah diproses.')
        }
    </script>
@endsection
