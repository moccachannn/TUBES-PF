<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">SEMPU OUTDOOR RENTAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/homepage">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('peminjaman.index') }}">Peminjaman</a></li>

                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Sewa</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>
=======
@extends('layouts.app')
@section('content')
>>>>>>> origin/moccachannn
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
