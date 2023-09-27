<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Carbon\Carbon;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanans = Pesanan::with('produk')->latest()->paginate(10);
        return view('content.pesanan.index',[
            "title" => "Data Pesanan",
            "pesanans" => $pesanans,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produks = Produk::all();
        $users = User::where('id', '!=', 1)->get();
        return view('content.pesanan.create', [
            "title" => "Tambah Pesanan",
            "produks" => $produks,
            "user" => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tgl_pesanan' => 'required',
            'tgl_pengirim' => 'required',
            'produk_id' => 'required',
            'users_id' => 'required',
        ]);
        Pesanan::create([
            'tgl_pesanan' => $request->tgl_pesanan,
            'tgl_pengirim' => $request->tgl_pengirim,
            'produk_id' => $request->produk_id,
            'user_id' => $request->users_id,

        ]);


        // Redirect to index
        return redirect()->route('pesanans.index')->with(['success' => 'Data Berhasil Disimpan!']);

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
        return view('content.pesanan.edit',[
            "title" => "Edit Pesanan"]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd($id);
        $pesanan = Pesanan::findOrFail($id);
        
        $pesanan->delete();

        return redirect()->route('pesanans.index')->with(['success' => 'Data Berhasil Hapus']);
    }
}
