<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pemain;

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

        Pemain::create([
            'nama_pemain' => 'Zola',
            'nomor_punggung'=> '26',
            'Posisi'=> 'Sayap Kiri'
        ]
        );

        Pemain::create([
            'nama_pemain' => 'Juan',
            'nomor_punggung'=> '25',
            'Posisi'=> 'Sayap Kanan'
        ]
        );

        
        Pemain::create([
            'nama_pemain' => 'Sze',
            'nomor_punggung'=> '36',
            'Posisi'=> 'Kapten'
        ]
        );

    }
}
