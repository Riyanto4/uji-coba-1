<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\User;

class UsersController
{
    public function index()
    {
        // Ambil data all user
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }
}
