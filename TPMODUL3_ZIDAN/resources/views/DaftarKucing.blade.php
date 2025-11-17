@extends('layouts.dashboard')

@section('title', 'Daftar Kucing')

@section('content')
    <div class="text-center mb-4">
        <h1 class="cat-title">🐾 Daftar Kucing Peliharaan 🐾</h1>
        <p class="cat-subtitle">Klik nama kucing untuk melihat detailnya</p>
    </div>

    <div class="row justify-content-center">
        <!-- 1. Perulangan foreach untuk menampilkan semua data kucing -->
        @foreach($kucings as $kucing)
            <div class="col-md-4 mb-3">
                <div class="cat-card text-center p-3 shadow-sm rounded">
                    <!-- 2. Nama kucing -->
                    <h4>{{ $kucing->nama_kucing }}</h4>
                    <!-- 3. Ras kucing -->
                    <p class="text-muted">{{ $kucing->ras }}</p>
                    <!-- 4. Link ke halaman detail -->
                    <a href="/kucing/{{ $kucing->id }}" class="btn btn-custom btn-sm">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
