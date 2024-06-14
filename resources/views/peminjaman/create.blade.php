<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Form Peminjaman</title> --}}
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

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#peminjamanModal">
            Form Peminjaman
        </button>

        <div class="modal" id="peminjamanModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Form Peminjaman</h4>

                    </div>

                    <div class="modal-body">
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="product_id" class="form-label">Barang yang Disewa</label>
                                <select class="form-select" id="product_id" name="product_id" required>
                                    <option value="">Pilih Barang</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->nama_produk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                                <input type="date" class="form-control" id="tanggal_sewa" name="tanggal_sewa"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="tanggal_pengembalian" class="form-label">Tanggal Pengembalian</label>
                                <input type="date" class="form-control" id="tanggal_pengembalian"
                                    name="tanggal_pengembalian" required>
                            </div>

                        </form>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
