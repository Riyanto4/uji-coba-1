<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

        // Get the user's data from the Cart
    $userCart = Cart::where('user_id', $userId)->first();

    // Insert data into the Laporan table
    Laporan::create([
        'nama_user' => $userCart->user->username,
        'total_harga' => $userCart->menu->harga * $userCart->quantity,
        'tanggal_transaksi' => Carbon::now(),
    ]);

        // Hapus pesanan dari Cart berdasarkan user_id
        Cart::where('user_id', $userId)->delete();

        // Anda dapat menyesuaikan logika redirect sesuai kebutuhan
        return redirect()->route('admin.pembayaran')->with('success', 'Pembayaran berhasil diverifikasi.');
    }

}
