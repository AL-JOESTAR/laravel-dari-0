<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //inisialisasi tabel
    protected $table = 'tb_products';

    //inisialisasi promarykeydaam tabel
    protected $primarykey = 'id_prodcut';

    //mengatur atau menentukan satu per satu kolom yang bisa di isi
    // protected $fillable = ['nama_product','harga','stock'];

    //inisialisasi data apa saja yang tidak boleh di isi
    protected $guraded = ['id_product'];

}
