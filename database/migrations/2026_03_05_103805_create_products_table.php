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
        //syntax laravel untuk membuat tabel produk
        Schema::create('tb_products', function (Blueprint $table) {
            $table->id('id_product'); //default id
            $table->string('nama_product', 150); //default length 255
            $table->integer('harga');
            $table->text('deskripsi_product');
            $table->integer('kategor_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
