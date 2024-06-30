@extends('layout.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Program Bantuan Sosial</h1>

    <div class="row g-4">
        <div class="col-md-6">
            <div class="custom-card">
                <div class="custom-card-header bg-primary">
                    <h2>Bantuan Pangan Non Tunai (BPNT)</h2>
                </div>
                <div class="custom-card-body">
                    <p>BPNT adalah program bantuan pangan yang diberikan dalam bentuk non-tunai kepada keluarga penerima manfaat.</p>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> Penerima manfaat dapat menggunakan Kartu Keluarga Sejahtera (KKS) untuk membeli bahan pangan di e-warong.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Bantuan ini bertujuan untuk meningkatkan ketahanan pangan keluarga miskin.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <div class="custom-card-header bg-primary">
                    <h2>Program Keluarga Harapan (PKH)</h2>
                </div>
                <div class="custom-card-body">
                    <p>PKH adalah program bantuan sosial bersyarat kepada keluarga miskin yang terdaftar dan memiliki komponen kesehatan, pendidikan, dan kesejahteraan sosial.</p>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> Bantuan diberikan setiap 3 bulan sekali.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Keluarga penerima manfaat harus memenuhi syarat tertentu seperti pemeriksaan kesehatan ibu hamil, anak-anak sekolah, dan lainnya.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <div class="custom-card-header bg-primary">
                    <h2>Bantuan Langsung Tunai (BLT) Mitigasi Risiko Pangan</h2>
                </div>
                <div class="custom-card-body">
                    <p>BLT ini diberikan untuk membantu keluarga miskin dalam mengatasi dampak risiko pangan, seperti kenaikan harga bahan pokok.</p>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> Bantuan diberikan secara langsung dalam bentuk uang tunai.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Bantuan ini diharapkan dapat digunakan untuk memenuhi kebutuhan dasar keluarga miskin.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="custom-card">
                <div class="custom-card-header bg-primary">
                    <h2>Bantuan Sosial Beras (BSB)</h2>
                </div>
                <div class="custom-card-body">
                    <p>BSB adalah program bantuan sosial dalam bentuk beras yang diberikan kepada keluarga miskin untuk membantu memenuhi kebutuhan pangan.</p>
                    <ul>
                        <li><i class="fas fa-check-circle text-success"></i> Beras diberikan setiap bulan dengan jumlah tertentu.</li>
                        <li><i class="fas fa-check-circle text-success"></i> Bantuan ini diharapkan dapat mengurangi beban pengeluaran keluarga miskin.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
