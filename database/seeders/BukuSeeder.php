<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // $buku = Buku::create([
        //     "judul" => "happy virus",
        //     "penulis" => "Miftah",
        //     "harga" => 500000,
        //     "tgl_terbit" => "2023-08-28"
        // ]);
        Buku::factory(10)->create();
    }
}