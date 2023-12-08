@extends('layout.app')

@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama User</th>
            <th>Total Harga</th>
            <th>Aksi</th> 
        </tr>
    </thead>
    <tbody>
        @php
            $totalHarga = 0;
        @endphp

        @foreach ($daftarPesanan as $index => $pesanan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $pesanan->username }}</td>
                <td>Rp. {{ $pesanan->total_harga }}</td>
                <td>
                    <form action="{{ route('verifikasi.pembayaran', ['userId' => $pesanan->user_id]) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Verifikasi Pembayaran</button>
                    </form>
                </td>
            </tr>
            @php
                $totalHarga += $pesanan->total_harga;
            @endphp
        @endforeach
    </tbody>
</table>


@endsection
