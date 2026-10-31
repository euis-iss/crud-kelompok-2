<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::latest()->get();
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_produk' => 'required|unique:produks,kode_produk',
            'nama_produk' => 'required',
            'kategori' => 'required',
            'merek' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'keterangan' => 'nullable',
        ]);
        Produk::create($validated);
     return redirect()->route('produk.index')->with('success',
     'Produk berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = Produk::findorFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findorFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_produk'=>'required|unique:produks,kode_produk,'.$id,
            'nama_produk'=>'required',
            'kategori'=>'required',
            'merek'=>'required',
            'harga'=>'required|numeric',
            'stok'=>'required|integer',
            'keterangan'=>'nullable',
        ]);

        $produk = Produk::findorFail($id);
        $produk->update($request->all());
        return redirect()->route('produk.index')->with('success',
        'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findorfail($id);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
