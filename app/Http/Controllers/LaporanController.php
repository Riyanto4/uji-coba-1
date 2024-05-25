<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;


class LaporanController extends Controller
{
    public function index()
    {
        // Get all data from the 'Laporan' model
        $laporanData = Laporan::all();

        // Pass the data to the view
        return view('admin.laporan.index', [
            'laporanData' => $laporanData,
        ]);
    }
}
