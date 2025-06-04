<?php

namespace app\Http\Controllers;

use app\Models\Lampu;
use Illuminate\Http\Request;

class LampuController extends Controller
{
    public function index()
    {
        $lampu = Lampu::all();
        return view('lampu.index', compact('lampu'));
    }

    public function create()
    {
        return view('lampu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merklampu' => 'required|string|max:25',
            'hargalampu' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        Lampu::create($request->all());

        return redirect()->route('lampu.index')
            ->with('success', 'Data lampu berhasil ditambahkan');
    }

    public function show(Lampu $lampu)
    {
        return view('lampu.show', compact('lampu'));
    }

    public function edit(Lampu $lampu)
    {
        return view('lampu.edit', compact('lampu'));
    }

    public function update(Request $request, Lampu $lampu)
    {
        $request->validate([
            'merklampu' => 'required|string|max:25',
            'hargalampu' => 'required|integer',
            'tersedia' => 'required|boolean',
            'berat' => 'required|numeric'
        ]);

        $lampu->update($request->all());

        return redirect()->route('lampu.index')
            ->with('success', 'Data lampu berhasil diperbarui');
    }

    public function destroy(Lampu $lampu)
    {
        $lampu->delete();

        return redirect()->route('lampu.index')
            ->with('success', 'Data lampu berhasil dihapus');
    }
}