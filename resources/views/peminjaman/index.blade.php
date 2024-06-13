@extends('layouts.app')
@section('content')

    <div class="container mt-5">
        <h2>Daftar Peminjaman</h2>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('peminjaman.create') }}" class="btn btn-primary mb-3">Tambah Barang</a>
        {{-- <li class="list-inline-item">
            <a href="{{ route('employees.exportPdf') }}" class="btn btnoutline-danger">
            <i class="bi bi-download me-1"></i> to PDF
            </a>
        </li> --}}
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Barang yang Dipinjam</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($peminjaman as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product->nama_produk }}</td>
                        <td>{{ $item->nama_lengkap }}</td>
                        <td>{{ $item->tanggal_sewa }}</td>
                        <td>{{ $item->tanggal_pengembalian }}</td>
                        <td>
                            <a href="{{ route('peminjaman.show', $item->id) }}" class="btn btn-info">Detail</a>
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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
@endsection
