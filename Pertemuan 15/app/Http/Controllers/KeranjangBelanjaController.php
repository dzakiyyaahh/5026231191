<?php

namespace App\Http\Controllers;

use App\Models\KeranjangBelanja;
use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjang = KeranjangBelanja::all();
        return view('keranjang.index', compact('keranjang'));
    }

    public function create()
    {
        return view('keranjang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0'
        ]);

        KeranjangBelanja::create($request->all());

        return redirect()->route('keranjang.index')
            ->with('success', 'Item berhasil ditambahkan ke keranjang');
    }

    public function destroy($id)
    {
        $item = KeranjangBelanja::findOrFail($id);
        $item->delete();

        return redirect()->route('keranjang.index')
            ->with('success', 'Item berhasil dihapus dari keranjang');
    }
}