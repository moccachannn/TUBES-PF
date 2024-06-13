<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table ="products";
    protected $fillable = [
        'nama_produk',
        'harga',
        // tambahkan atribut lain yang diizinkan untuk mass assignment
    ];
}
