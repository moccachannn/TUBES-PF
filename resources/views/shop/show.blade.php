<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail products</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mt-5">
        <h2>Detail products</h2>
        <div class="card">
            <div class="card-header">
                Detail products
            </div>
            <div class="card-body">
                <h5 class="card-title">Harga {{ $products->harga }}</h5>
                <p class="card-text"><strong>nama barang </strong> {{ $products->nama_produk }}</p>
                <a href="{{ route('shop.index') }}" class="btn btn-primary">Kembali</a>
                <a href="{{ route('products.edit', $products->id) }}" class="btn btn-info">Edit</a>
                <form action="{{ route('products.destroy', $products->id) }}" method="POST" class="mt-3">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus produk ini?')">Hapus Produk</button>
                </form>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
