<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    public function index()
{
    // Ambil data pesanan dari tabel Cart dan gabungkan berdasarkan username
    $daftarPesanan = Cart::select(
        'user_id',
        'users.username as username', // Ganti 'users.username' dengan 'users.name' jika nama kolomnya adalah 'name'
        DB::raw('GROUP_CONCAT(carts.id) as pesanan_ids'),
        DB::raw('SUM(carts.quantity * menu.harga) as total_harga')
    )
    ->groupBy(['user_id', 'users.username']) // Ganti 'users.username' dengan 'users.name'
    ->leftJoin('menu', 'carts.menu_id', '=', 'menu.id')
    ->leftJoin('users', 'carts.user_id', '=', 'users.id') // Gabungkan dengan tabel users
    ->get();

    // Kirim data ke tampilan
    return view('admin.pembayaran.index', [
        'daftarPesanan' => $daftarPesanan,
    ]);
}

    public function verifikasiPembayaran($userId)
    {
        // Hapus pesanan dari Cart berdasarkan user_id
        Cart::where('user_id', $userId)->delete();

        // Anda dapat menyesuaikan logika redirect sesuai kebutuhan
        return redirect()->route('admin.pembayaran')->with('success', 'Pembayaran berhasil diverifikasi.');
    }

}
