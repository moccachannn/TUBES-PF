<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Mengambil semua produk dari database
        return view('shop.index', compact('products')); // Mengirim data produk ke view
    }
}
