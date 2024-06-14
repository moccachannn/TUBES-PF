<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Peminjaman</title>
    @vite('resources/css/app.css')

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h1>Detail Peminjaman</h1>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Nama Lengkap:</strong>{{ $peminjaman->nama_lengkap }}</p>
                <p class="card-text"><strong>Barang yang Disewa:</strong> {{ $peminjaman->product->nama_produk }}</p>
                <p class="card-text"><strong>Tanggal Sewa:</strong> {{ $peminjaman->tanggal_sewa }}</p>
                <p class="card-text"><strong>Tanggal Pengembalian:</strong> {{ $peminjaman->tanggal_pengembalian }}</p>
                <a href="{{ route('peminjaman.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
