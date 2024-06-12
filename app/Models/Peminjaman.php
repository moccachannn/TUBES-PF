<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id', 'nama_lengkap', 'tanggal_sewa', 'tanggal_pengembalian',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    protected $table = 'peminjaman';
}
