<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get pemasoks
        $pemasoks = Pemasok::latest()->paginate(10);
                
        // Debugging to check $pemasoks
        // dd($pemasoks);
        
        // Render view with posts
        return view('content.pemasok.index', [
            "title" => "Data Pemasok",
            "pemasoks" => $pemasoks
        ]);
    }

    

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.pemasok.create',[
            "title" => "Tambah Pemasok",]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemasok' => 'required',
            'no_telp_pemasok' => 'required|max:12',
            'email_pemasok' => 'required|email',
            'alamat_pemasok' => 'required'
        ]);

        Pemasok::create([
            'nama_pemasok' => $request->nama_pemasok,
            'no_telp_pemasok' => $request->no_telp_pemasok,
            'email_pemasok' => $request->email_pemasok,
            'alamat_pemasok' => $request->alamat_pemasok
        ]);

        // Redirect to index
        return redirect()->route('pemasoks.index')->with(['success' => 'Data Berhasil Disimpan!']);

    }
    
    public function edit(string $id)
    {
        $pemasok = Pemasok::findOrFail($id);

        return view('content.pemasok.edit', [
            'title' => 'Edit Pemasok',
            'pemasok' => $pemasok
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'nama_pemasok' => 'required',
            'no_telp_pemasok' => 'required|max:12',
            'email_pemasok' => 'required|email',
            'alamat_pemasok' => 'required'
        ]);

        $pemasok = Pemasok::findOrFail($id);

        $pemasok->update([
            'nama_pemasok' => $request->nama_pemasok,
            'no_telp_pemasok' => $request->no_telp_pemasok,
            'email_pemasok' => $request->email_pemasok,
            'alamat_pemasok' => $request->alamat_pemasok
        ]);
        //redirect to index
        return redirect()->route('pemasoks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pemasok = Pemasok::findOrFail($id);

        $pemasok->delete();

        return redirect()->route('pemasoks.index')->with(['success' => 'Data Berhasil Dihapus!']);

    }
}
