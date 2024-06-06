<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIK',
        'Nama',
        'Tempat_Lahir',
        'Tanggal_Lahir',
        'Alamat',
        'Status',
        'Agama',
        'image',
    ];

    protected $table = 'menu';

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }
}
