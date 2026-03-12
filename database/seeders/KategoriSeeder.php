<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //kategori seeder

        DB::table('tb_kategori')->insert([
            ['nama_kategori' => 'elektronik',
              'deskripsi' => 'elektronik wowo',
            ],
        ]);
    }
}
