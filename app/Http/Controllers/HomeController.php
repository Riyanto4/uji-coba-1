<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        // $username = auth()->user()->username;
        return view('admin.dashboard', compact('menus'));
    }
}
