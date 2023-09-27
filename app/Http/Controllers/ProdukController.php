<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Pemasok;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $produks = Produk::with('pemasok', 'gudang')->latest()->paginate(10);

        return view('content.produk.index',[
            "title" => "Data Produk",
            "produks" => $produks
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pemasok = Pemasok::all();
        $gudang = Gudang::all();
        return view('content.produk.create',[
            "title" => "Tambah Produk",
            "pemasok" => $pemasok,
            "gudang" => $gudang,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required',
            'satuan' => 'required',
            'pemasok_id' => 'required',
            'gudang_id' => 'required',
            'deskripsi' => 'required',
        ]);

        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'satuan' => $request->satuan,
            'pemasok_id' => $request->pemasok_id,
            'gudang_id' => $request->gudang_id,
            'deskripsi' => $request->deskripsi
        ]);

        // Redirect to index
        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemasok = Pemasok::all();
        $gudang = Gudang::all();
        $produk = Produk::with('pemasok','gudang')->findOrFail($id);
        return view('content.produk.edit',[
            "title" => "Edit Produk",
            "produk" => $produk,
            "pemasok" => $pemasok,
            "gudang" => $gudang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $this->validate($request,[
            'nama_produk' => 'required',
            'harga' => 'required|numeric',
            'berat' => 'required',
            'satuan' => 'required',
            'pemasok_id' => 'required',
            'gudang_id' => 'required',
            'deskripsi' => 'required',
        ]);

        $produk = Produk::findOrFail($id);

        $produk->update([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'satuan' => $request->satuan,
            'pemasok_id' => $request->pemasok_id,
            'gudang_id' => $request->gudang_id,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        
        $produk->delete();

        return redirect()->route('produks.index')->with(['success' => 'Data Berhasil Hapus']);
    }
}
