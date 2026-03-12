<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    Protected $table  = 'tb_kategori';

    protected $primaryKey = 'id_kategori';

    protected $guarded = ['id_kategori'];


}
