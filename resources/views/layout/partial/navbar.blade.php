<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Data Warga</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-body-primary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="{{ route('home') }}"><b>Web Data Warga</b></a>


            @if(auth()->check())

            @else
            <!-- If no user is logged in, display an empty string or other content -->
            <!-- Example: -->
            <span>No user logged in</span>
            @endif

            <div class="d-flex">
                <!-- Profile Dropdown -->
                <div class="dropdown me-2">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">

                    </button>
                    <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="{{ route('daftar_pesanan') }}">Daftar verifikasi</a></li>
                    </ul>
                </div>

                <!-- Logout or Login Form -->
                @if(auth()->check())
                <!-- If user is logged in, display the logout button -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit">Logout</button>
                </form>
                @else
                <!-- If no user is logged in, display an empty form or other content -->
                <!-- Example: -->
                <form action="{{ route('login') }}" method="GET">
                    <button class="btn btn-outline-primary" type="submit">Login</button>
                </form>
                @endif
            </div>
        </div>
    </nav>

    <!-- Tambahkan script Bootstrap JavaScript (Popper.js dan Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>