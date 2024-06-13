@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4">Dibuat Oleh</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('foto/FotoDafa.jpg')}}" class="card-img-top" alt="" width="100%" height="550px">
                <div class="card-body">
                    <h5 class="card-title">Nama : Dafa Ahmad Sajangah</h5>
                    <p class="card-text">NIM : STI202202731</p>
                    <p class="card-text">Kelas : C4.1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('foto/FotoDani.png')}}" class="card-img-top" alt="" width="100%" height="550px">
                <div class="card-body">
                    <h5 class="card-title">Nama : Nurdani Dwi Romadon</h5>
                    <p class="card-text">NIM : STI202203300</p>
                    <p class="card-text">Kelas : C4.1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('foto/FotoIkhwan.jpg')}}" class="card-img-top" alt="" width="100%" height="550px">
                <div class="card-body">
                    <h5 class="card-title">Nama : Ikhwan Aji Ginanjar</h5>
                    <p class="card-text">NIM : STI202203295</p>
                    <p class="card-text">Kelas : C4.1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('foto/FotoRiyanto.jpg')}}" class="card-img-top" alt="" width="100%" height="550px">
                <div class="card-body">
                    <h5 class="card-title">Nama : Riyanto</h5>
                    <p class="card-text">NIM : STI202202753</p>
                    <p class="card-text">Kelas : C4.1</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('foto/FotoMega.jpg')}}" class="card-img-top" alt="" width="100%" height="550px">
                <div class="card-body">
                    <h5 class="card-title">Nama : Mega Silvia</h5>
                    <p class="card-text">NIM : STI202202731</p>
                    <p class="card-text">Kelas : C4.1</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection