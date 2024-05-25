@extends('layout.app')

@section('content')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama User</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanData as $index => $laporan)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $laporan->nama_user }}</td>
                    <td>Rp. {{ $laporan->total_harga }}</td>
                    <td>{{ \Carbon\Carbon::parse($laporan->tanggal_transaksi)->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
