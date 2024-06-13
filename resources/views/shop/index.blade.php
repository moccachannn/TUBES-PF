<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite('resources/css/app.css')
    </head>
<body>


    <div class="container mt-5">
        <h2>List Data Barang</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        <a href="{{ route('/') }}" class="btn btn-primary mb-3">Homepage</a>
        {{-- <li class="list-inline-item">
            <a href="{{ route('employees.exportPdf') }}" class="btn btnoutline-danger">
            <i class="bi bi-download me-1"></i> to PDF
            </a>
        </li> --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->harga }}</td>

                        <td>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('shop.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <form action="{{ route('products.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
