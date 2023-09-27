<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // Get Gudang
        $gudangs = Gudang::latest()->paginate(10);

        return view('content.gudang.index',[
            "title" => "Data Gudang",
            'gudangs' => $gudangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.gudang.create',[
            "title" => "Tambah Gudang"]);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $request->validate([
            'nama_gudang' => 'required',
            'kapasitas' => 'required',
            'alamat' => 'required'
        ]);

        Gudang::create([
            'nama_gudang' => $request->nama_gudang,
            'kapasitas' => $request->kapasitas,
            'alamat' => $request->alamat
        ]);

        // Redirect to index
        return redirect()->route('gudangs.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $gudang = Gudang::findOrFail($id);

        return view('content.gudang.edit', [
            'title' => 'Edit Gudang',
            'gudang' => $gudang
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_gudang' => 'required',
            'kapasitas' => 'required',
            'alamat' => 'required'
        ]);

        $gudang = Gudang::findOrFail($id);

        $gudang->update([
            'nama_gudang' => $request->nama_gudang,
            'kapasitas' => $request->kapasitas,
            'alamat' => $request->alamat
        ]);
        //redirect to index
        return redirect()->route('gudangs.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gudang = Gudang::findOrFail($id);

        $gudang->delete();

        return redirect()->route('gudangs.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
