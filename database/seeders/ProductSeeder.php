<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //query untuk menambah data
        DB::table('tb_products')->insert([
            ['nama_product' => 'sawit wowo',
            'harga' => 5000,
            'deskripsi_product' => 'test deskripsi',
            'kategori_id' => 2,
            'created_at'=>now()
            ],[
            'nama_product' => 'bahlil iol',
            'harga' => 1000,
            'deskripsi_product' => 'test deskripsi',
            'kategori_id' => 2,
            'created_at'=>now()
            ]
        ]);
    }
}
