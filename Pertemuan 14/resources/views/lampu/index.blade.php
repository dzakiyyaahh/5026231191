@extends('template')

@section('content')
<div class="container">
    <h2>Data Lampu</h2>
    <a href="{{ route('lampu.create') }}" class="btn btn-success mb-3">Tambah Data</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Merk Lampu</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($lampu as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->merklampu }}</td>
            <td>{{ number_format($item->hargalampu, 0, ',', '.') }}</td>
            <td>{{ $item->tersedia ? 'Ya' : 'Tidak' }}</td>
            <td>{{ $item->berat }}</td>
            <td>
                <form action="{{ route('lampu.destroy', $item->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('lampu.show', $item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('lampu.edit', $item->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>