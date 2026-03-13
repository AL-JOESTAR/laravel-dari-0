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
            $table->string('kode_product')->unique();
            $table->string('nama_product', 150); //default length 255
            $table->bigInteger('harga');
            $table->text('deskripsi_product');
            $table->integer('stock');
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();

            $table->foreign('kategori_id')->references('id_kategori')->on('tb_kategori')->onDelete('cascade');
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
