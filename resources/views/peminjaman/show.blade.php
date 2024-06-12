<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mt-5">
        <h2>Detail Peminjaman</h2>
        <div class="card">
            <div class="card-header">
                Detail Peminjaman
            </div>
            <div class="card-body">
                <h5 class="card-title">Nama Lengkap: {{ $peminjaman->nama_lengkap }}</h5>
                <p class="card-text"><strong>Barang yang Disewa:</strong> {{ $peminjaman->product->nama_produk }}</p>
                <p class="card-text"><strong>Tanggal Sewa:</strong> {{ $peminjaman->tanggal_sewa }}</p>
                <p class="card-text"><strong>Tanggal Pengembalian:</strong> {{ $peminjaman->tanggal_pengembalian }}</p>
                <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
