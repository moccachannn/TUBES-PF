<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk
        $products = Product::all();

        // Mengirim data produk ke view 'homepage'
        return view('homepage', compact('products'));
    }
    public function show($id)
    {
        $products = Product::findOrFail($id); // Mengambil detail peminjaman beserta produk terkait
        return view('detailproduk', compact('products'));
    }
}
