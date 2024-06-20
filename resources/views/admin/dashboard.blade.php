@extends('layout.app')

@section('content')

<div id="page-content-wrapper">
    <!-- Top navigation-->
    <h1 style="text-align: center;" class="mt-4">Selamat Datang di Halaman WEB SENSUS WARGA</h1>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('foto/alunbmys.jpg')}}" class="d-block w-100" alt="..." width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('foto/alunpwt.jpeg')}}" class="d-block w-100" alt="..." width="100%" height="500px">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('foto/alunpbg.jpg')}}" class="d-block w-100" alt="..." width="100%" height="500px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Page content-->
    <!-- <div class="container-fluid">
        
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Agama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>

    </div> -->
</div>

@endsection