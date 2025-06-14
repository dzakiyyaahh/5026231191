@extends('template')

@section('content')
<div class="container">
    <h2>Tambah Item ke Keranjang</h2>
    <form action="{{ route('keranjang.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="KodeBarang">Kode Barang:</label>
            <input type="number" class="form-control" id="KodeBarang" name="KodeBarang" required>
        </div>
        <div class="form-group">
            <label for="Jumlah">Jumlah Pembelian:</label>
            <input type="number" class="form-control" id="Jumlah" name="Jumlah" min="1" required>
        </div>
        <div class="form-group">
            <label for="Harga">Harga per item:</label>
            <input type="number" class="form-control" id="Harga" name="Harga" min="0" required>
        </div>
        <button type="submit" class="btn btn-success">Beli</button>
        <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection