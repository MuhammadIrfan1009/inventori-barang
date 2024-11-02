<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all(); 
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
         $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer|min:0',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|integer|min:0',
        ]);

        // Simpan data barang
        Barang::create($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        // Validasi input
        $request->validate([
            'nama_barang' => 'required|string|max:100',
            'jenis_barang' => 'required|string|max:100',
            'stock' => 'nullable|integer|min:0',
            'status' => 'nullable|string|max:20',
            'harga_satuan' => 'nullable|integer|min:0',
        ]);

        // Update data barang
        $barang->update($request->all());
        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete(); 
        return redirect()->route('barang.index');
    }
}
