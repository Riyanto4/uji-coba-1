<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DaftarPesananController extends Controller
{
    public function index()
    {
        // Ambil pengguna yang sedang login
        $user = Auth::user();

        // Jika pengguna tidak login, mungkin Anda ingin menangani sesuai kebutuhan proyek Anda
        if (!$user) {
            return redirect()->route('login'); // Contoh: redirect ke halaman login
        }

        // Ambil daftar pesanan dari model Cart berdasarkan user_id
        $daftarPesanan = Cart::where('user_id', $user->id)->get();

        // Hitung total harga dari semua pesanan
        $totalHarga = $daftarPesanan->sum(function ($pesanan) {
            return $pesanan->quantity * $pesanan->harga;
        });

        // Ambil data menu (nama, harga) untuk ditampilkan dalam tabel
        $dataMenu = Menu::whereIn('id', $daftarPesanan->pluck('menu_id'))->get();

        // Kirim semua data ke view
        return view('web.daftar_pesanan', [
            'daftarPesanan' => $daftarPesanan,
            'totalHarga' => $totalHarga,
            'dataMenu' => $dataMenu, // Tambahkan data menu ke array
        ]);
    }


    public function tambahQuantity($id)
    {
        $pesanan = Cart::find($id);

        if ($pesanan) {
            $pesanan->quantity++;
            $pesanan->save();
        }

        return redirect()->route('daftar_pesanan');
    }

    public function kurangQuantity($id)
    {
        $pesanan = Cart::find($id);

        if ($pesanan) {
            if ($pesanan->quantity > 1) {
                $pesanan->quantity--;
                $pesanan->save();
            } else {
                // Jika quantity adalah 1, hapus item dari keranjang
                
            }
        }

        return redirect()->route('daftar_pesanan');
    }

    public function hapusDaftarPesanan($index)
    {
        // Hapus item daftar pesanan berdasarkan index
        $pesanan = Cart::where('user_id', Auth::id())->skip($index - 1)->first();

        if ($pesanan) {
            $pesanan->delete();
        }

        return redirect()->route('daftar_pesanan');
    }
}
