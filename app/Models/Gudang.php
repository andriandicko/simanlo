<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    use HasFactory;

    protected $fillable = ['nama_gudang', 'kapasitas', 'alamat'];


    public function produk(){
        return $this->hasOne(Produk::class);
    }
}
