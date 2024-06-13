<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ProductController extends Controller
{
    public function index()
    {
        $pageTitle ='admin';
        $products = Product::all(); // Mengambil semua produk dari database
        return view('shop.index', compact('products', 'pageTitle')); // Mengirim data produk ke view
    }

    public function kembali()
    {
        // Mengambil semua data produk
        $products = Product::all();

        // Mengirim data produk ke view 'homepage'
        return view('homepage', compact('products'));
    }

    public function show($id)
    {
        $products = Product::findOrFail($id); // Mengambil detail peminjaman beserta produk terkait
        return view('shop.show', compact('products'));
    }

    public function create()
    {
        return view('shop.create'); // Return the view to create a new product
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric', // Changed 'date' to 'numeric' for the harga field
        ]);

        Log::info('Validated Data:', $validatedData);

        Product::create($validatedData);

        return redirect()->route('shop.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('shop.edit', compact('product'));
    }

    // Menyimpan perubahan pada produk
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|numeric',
            // Tambahkan validasi lainnya sesuai kebutuhan
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('shop.show', $product->id)->with('success', 'Produk berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('shop.index')->with('success', 'Produk berhasil dihapus.');
    }
}
