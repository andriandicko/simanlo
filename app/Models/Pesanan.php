<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tgl_pesanan',
        'tgl_pengirim',
        'produk_id',
        'user_id',
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
}
