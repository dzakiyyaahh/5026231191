@extends('template')

@section('content')
<div class="container">
    <h2>Detail Lampu</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Merk: {{ $lampu->merklampu }}</h5>
            <p class="card-text">
                <strong>Harga:</strong> Rp {{ number_format($lampu->hargalampu, 0, ',', '.') }}<br>
                <strong>Tersedia:</strong> {{ $lampu->tersedia ? 'Ya' : 'Tidak' }}<br>
                <strong>Berat:</strong> {{ $lampu->berat }} kg
            </p>
            <a href="{{ route('lampu.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>