<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DetailPeminjamanController extends Controller
{
    public function show($id)
    {
        $peminjaman = Peminjaman::with('product')->findOrFail($id); // Mengambil detail peminjaman beserta produk terkait
        return view('peminjaman.show', compact('peminjaman'));
    }
}
