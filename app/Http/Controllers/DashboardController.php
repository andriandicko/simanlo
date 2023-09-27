<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Pesanan = Pesanan::count();
        $Users = User::count();
        $Produk = Produk::count();
        $Gudang = Gudang::count();

        return view('dashboard', [
            'title' => 'Dashboard',
            'pesanan_count' => $Pesanan,
            'users_count' => $Users,
            'produk_count' => $Produk,
            'gudang_count' => $Gudang,
        ]);
    }
}
