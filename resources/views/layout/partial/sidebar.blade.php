@if(Auth::check() && Auth::user()->username == "Admin")
<!-- Wrapper -->
<div class="d-flex" id="wrapper">

    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">

        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.daftarmakanan') }}">Daftar Warga</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.users') }}">All User</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('admin.laporan') }}">About Team</a>

        </div>
    </div>
    <!-- Page content wrapper-->
    @endif