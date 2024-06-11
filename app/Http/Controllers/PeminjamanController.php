<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Product;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function create()
    {
        $products = Product::all(); // Mengambil semua produk untuk pilihan barang yang disewa
        return view('peminjaman.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after_or_equal:tanggal_sewa',
        ]);

        Peminjaman::create($request->all());

        return redirect()->back()->with('success', 'Peminjaman berhasil disimpan.');
    }
}
