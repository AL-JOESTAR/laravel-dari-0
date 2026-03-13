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
        DB::table('tb_kategori')->insert([
            [
            'nama_kategori' => 'minyak',
            'deskripsi' => 'minyak asli bree',
            ],            [
            'nama_kategori' => 'code',
            'deskripsi' => 'code asli cuma disini',
            ],
        ]);
        DB::table('tb_products')->insert([
            [
            'kode_product' => 'A001',
            'nama_product' => 'sawit wowo',
            'harga' => 5000,
            'stock' => 100,
            'deskripsi_product' => 'test deskripsi',
            'kategori_id' => 1,
            'created_at'=>now()
            ],[
            'kode_product' => 'A002',
            'nama_product' => 'bahlil king oil',
            'harga' => 12000,
            'stock' => 90,
            'deskripsi_product' => 'oil masih banyak',
            'kategori_id' => 1,
            'created_at'=>now()
            ],[
            'kode_product' => 'A003',
            'nama_product' => 'code ganjar',
            'harga' => 10000,
            'stock' => 20,
            'deskripsi_product' => 'code dijamin nagih',
            'kategori_id' => 2,
            'created_at'=>now()
            ],
        ]);
    }
}
