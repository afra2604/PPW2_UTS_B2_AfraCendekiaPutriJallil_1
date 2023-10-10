<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Barang::create([
            'nama_barang' => 'meja',
            'harga'=> '26000000',
            'stok'=> '22',
            'id_supplier' => '2510'
        ]
        );

        
        Barang::create([
            'nama_barang' => 'kursi',
            'harga'=> '30000000',
            'stok'=> '30',
            'id_supplier' => '2601'
        ]
        );

        
        Barang::create([
            'nama_barang' => 'lemari',
            'harga'=> '36000000',
            'stok'=> '25',
            'id_supplier' => '1209'
        ]
        );

    }
}
