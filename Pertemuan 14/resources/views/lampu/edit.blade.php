@extends('template')

@section('content')
<div class="container">
    <h2>Edit Data Lampu</h2>
    <form action="{{ route('lampu.update', $lampu->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="merklampu">Merk Lampu:</label>
            <input type="text" class="form-control" id="merklampu" name="merklampu" value="{{ $lampu->merklampu }}" required>
        </div>
        <div class="form-group">
            <label for="hargalampu">Harga:</label>
            <input type="number" class="form-control" id="hargalampu" name="hargalampu" value="{{ $lampu->hargalampu }}" required>
        </div>
        <div class="form-group">
            <label for="tersedia">Tersedia:</label>
            <select class="form-control" id="tersedia" name="tersedia" required>
                <option value="1" {{ $lampu->tersedia ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ !$lampu->tersedia ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <div class="form-group">
            <label for="berat">Berat (kg):</label>
            <input type="number" step="0.01" class="form-control" id="berat" name="berat" value="{{ $lampu->berat }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('lampu.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>