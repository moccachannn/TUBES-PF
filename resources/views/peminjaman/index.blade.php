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
        <a href="{{ route('peminjaman.store') }}" class="btn btn-primary mb-3">Form Peminjaman</a>
        <a href="{{ route('/') }}" class="btn btn-primary mb-3">Homepage</a>
        <table class="table table-bordered text-center">
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
                        <td class="d-flex justify-content-center">
                            <a href="{{ route('peminjaman.show', $item->id) }}" class="btn btn-info btn-sm mr-2">Detail</a>
                            <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
