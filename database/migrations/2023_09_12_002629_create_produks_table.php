<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk'); 
            $table->double('harga'); 
            $table->integer('berat'); 
            $table->string('satuan'); 
            $table->foreignId('pemasok_id')->constrained('pemasoks')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('gudang_id')->constrained('gudangs')->onUpdate('cascade')->onDelete('cascade');
            $table->text('deskripsi'); 
            $table->timestamps();
        });
    }

    // 'nama_produk', 'harga', 'berat', 'satuan', 'pemasok_id', 'gudang_id', 'deskripsi'

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
