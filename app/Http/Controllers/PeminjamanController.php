<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PeminjamanController extends Controller
{
    // Menampilkan form peminjaman
    public function create()
    {
        $products = Product::all(); // Mengambil semua produk untuk pilihan barang yang disewa
        return view('peminjaman.create', compact('products'));
    }

    // Menyimpan data peminjaman
    public function store(Request $request)
    {
        $validatedData =$request->validate([
            'product_id' => 'required|exists:products,id',
            'nama_lengkap' => 'required|string|max:255',
            'tanggal_sewa' => 'required|date',
            'tanggal_pengembalian' => 'required|date|after_or_equal:tanggal_sewa',
        ]);

        log::info('Validated Data:', $validatedData);

        Peminjaman::create($validatedData);

        return redirect()->route('peminjaman.index')->with('success', 'Peminjaman berhasil disimpan.');
    }

    // Menampilkan daftar peminjaman
    public function index()
    {
        $peminjaman = Peminjaman::with('product')->get(); // Mengambil semua data peminjaman beserta produk terkait
        return view('peminjaman.index', compact('peminjaman'));
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::with('product')->findOrFail($id); // Mengambil detail peminjaman beserta produk terkait
        return view('peminjaman.show', compact('peminjaman'));
    }
}
