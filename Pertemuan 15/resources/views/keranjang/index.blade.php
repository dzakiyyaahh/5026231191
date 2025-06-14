@extends('template')

@section('content')
<div class="container">
    <h2>Keranjang Belanja</h2>
    <a href="{{ route('keranjang.create') }}" class="btn btn-primary mb-3">Tambah Item</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per item</th>
                <th>Total</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($keranjang as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->KodeBarang }}</td>
                <td>{{ $item->Jumlah }}</td>
                <td>Rp {{ number_format($item->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ route('keranjang.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Batal</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection