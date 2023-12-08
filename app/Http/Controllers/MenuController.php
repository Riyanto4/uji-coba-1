<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function addToCart($menuId)
    {
        // Pastikan pengguna sudah login
        if (Auth::check()) {
            $user = Auth::user();

            // Cek apakah item sudah ada di keranjang pengguna
            $cartItem = Cart::where('menu_id', $menuId)
                            ->where('user_id', $user->id)
                            ->first();

            if ($cartItem) {
                // Jika sudah ada, tambahkan jumlahnya
                $cartItem->increment('quantity');
            } else {
                // Jika belum ada, tambahkan ke keranjang
                Cart::create([
                    'menu_id' => $menuId,
                    'user_id' => $user->id,
                    'quantity' => 1,
                ]);
            }

            return redirect()->route('home')->with('success', 'Item ditambahkan ke keranjang.');
        } else {
            return redirect()->route('login')->with('error', 'Silakan login untuk menambahkan item ke keranjang.');
        }
    }
}
