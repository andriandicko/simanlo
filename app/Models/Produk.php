<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'harga', 'berat', 'satuan', 'pemasok_id', 'gudang_id', 'deskripsi'];


    public function pemasok()
    {
        return $this->belongsTo(Pemasok::class);
    }

    public function gudang(){
        return $this->belongsTo(Gudang::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
