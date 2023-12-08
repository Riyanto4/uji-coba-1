<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminDaftarMakananController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        $username = auth()->user()->username;
        return view('admin.daftar_makanan.index', compact('menus', 'username'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan menu baru
        return view('admin.daftar_makanan.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_menu' => 'required',
            'harga' => 'required|numeric',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image', // Validasi file gambar
        ]);

        // Simpan menu baru ke dalam database
    
        $foto_file = $request->file('gambar');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);
   
        $data = [
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'kategori' => $request->kategori,
        'deskripsi' => $request->deskripsi,
        'image' => $foto_nama // Simpan path gambar ke database]
            
        ];

        Menu::create($data);

       

        return redirect()->route('admin.daftarmakanan')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        // Ambil data menu yang akan diedit
        $menu = Menu::findOrFail($id);

        // Tampilkan form untuk mengedit menu
        return view('admin.daftar_makanan.edit', compact('menu'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
    $request->validate([
        'nama_menu' => 'required',
        'harga' => 'required|numeric',
        'kategori' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'image', // Validasi file gambar (opsional)
    ]);

    // Ambil data menu yang akan diupdate
    $menu = Menu::findOrFail($id);

    // Simpan path gambar lama untuk dihapus nanti
    $gambarLama = $menu->image;

    // Update atribut sesuai dengan model Menu
    $menu->update([
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'kategori' => $request->kategori,
        'deskripsi' => $request->deskripsi,
    ]);

    // Jika ada file gambar baru, proses upload dan update path gambar
    if ($request->hasFile('gambar')) {
        // Upload gambar baru
        $foto_file = $request->file('gambar');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis'). "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);

        // Update path gambar di database
        $menu->update(['image' => $foto_nama]);

        // Hapus gambar lama dari sistem file menggunakan File::delete
        if ($gambarLama) {
            $pathGambarLama = public_path('foto') . '/' . $gambarLama;
            File::delete($pathGambarLama);
        }
    }

    return redirect()->route('admin.daftarmakanan')->with('success', 'Menu berhasil diperbarui.');
    }
    
    public function destroy($id)
    {
        // Ambil data menu dari database
    $menu = Menu::findOrFail($id);

    // Simpan path gambar untuk dihapus nanti
    $gambar = $menu->image;

    // Hapus data menu dari database
    $menu->delete();

    // Hapus gambar dari sistem file menggunakan File::delete
    if ($gambar) {
        $pathGambar = public_path('foto') . '/' . $gambar;
        File::delete($pathGambar);
    }

    return redirect()->route('admin.daftarmakanan')->with('success', 'Menu berhasil dihapus.');
    }
}
