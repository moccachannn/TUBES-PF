<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Produk</h2>
        <div class="card">
            <div class="card-header">
                Form Edit Produk
            </div>
            <div class="card-body">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_produk" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" value="{{ old('nama_produk', $product->nama_produk) }}">
                        @error('nama_produk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $product->harga) }}">
                        @error('harga')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- Tambahkan input untuk atribut lainnya sesuai kebutuhan --}}

                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <a href="{{ route('shop.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
