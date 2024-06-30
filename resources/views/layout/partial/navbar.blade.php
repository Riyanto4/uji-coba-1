<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Data Warga</title>
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Tambahkan link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/sb-admin-2.min.css') }}">
</head>

<body>
    <nav class="navbar bg-body-primary">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="{{ route('home') }}"><b>Web Data Warga</b></a>


            @if(auth()->check())
            <!--tampilkan username jika login  -->
            <p>Welcome, {{ auth()->user()->username }}!</p>
            @else
            <!-- If no user is logged in, display an empty string or other content -->
            <!-- Example: -->
            <span>No user logged in</span>
            @endif


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
    <script src="{{ asset('css/sb-admin-2.min.js') }}"></script>
</body>

</html>