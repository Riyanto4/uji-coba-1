<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan Makanan</title>
  <!-- Tambahkan link Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Buat Akun Data Warga</h2>
                <p class="text-white-50 mb-5">Tolong isi kolom untuk membuat akun!</p>

                <form action="{{ route('register') }}" method="POST">
                  @csrf

                  <div class="form-outline form-white mb-4">
                    <input type="text" name="username" id="typeUsername" class="form-control form-control-lg" />
                    <label class="form-label" for="typeUsername">Username</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password" id="typePassword" class="form-control form-control-lg" />
                    <label class="form-label" for="typePassword">Password</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="password_confirmation" id="typeConfirmPassword" class="form-control form-control-lg" />
                    <label class="form-label" for="typeConfirmPassword">Konfirmasi Password</label>
                  </div>
                  @error('password')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror


                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Daftar</button>
                </form>
                <br>

                <p>Sudah Ada Akun? <a href="{{ route('login') }}" class="text-white-50 fw-bold">Login</a></p>

                <!-- <a href="{{ route('login') }}" class="text-white-50 fw-bold">Login</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Tambahkan script Bootstrap JavaScript (Popper.js dan Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>