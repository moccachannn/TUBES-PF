<?php

namespace App\Http\Controllers;

use App\Models\TransaksiPeminjaman;
use App\Models\Product;
use Illuminate\Http\Request;

class TransaksiPeminjamanController extends Controller
{
    // Menampilkan form peminjaman
    public function create()
    {
        $products = Product::all(); // Mengambil semua produk untuk pilihan barang yang disewa
        return view('transaksi_peminjaman.create', compact('products'));
    }

    // Menyimpan data peminjaman
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after_or_equal:tanggal_sewa',
        ]);

        TransaksiPeminjaman::create($request->all());

        return redirect()->route('transaksi_peminjaman.index')->with('success', 'Peminjaman berhasil disimpan.');
    }

    // Menampilkan daftar peminjaman
    public function index()
    {
        $transaksiPeminjaman = TransaksiPeminjaman::with('product')->get(); // Mengambil semua data peminjaman beserta produk terkait
        return view('transaksi_peminjaman.index', compact('transaksiPeminjaman'));
    }
}
