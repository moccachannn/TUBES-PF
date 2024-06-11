<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mt-5">
        <h2>Form Peminjaman</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('peminjaman.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="product_id" class="form-label">Barang yang Disewa</label>
                <select class="form-select" id="product_id" name="product_id" required>
                    <option value="">Pilih Barang</option>
                    @foreach($products as $product)
                        <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
