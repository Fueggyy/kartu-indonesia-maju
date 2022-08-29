<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Card::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=> bcrypt('12345678'),
            'roles_id'=> '1'
        ]);

        \App\Models\Card::factory()->create([
            'nomor_kartu' => '123456789',
            'name' => 'Test User',
            'alamat' => 'JL. Kepo',
            'lahir' => '02-02-2002',
            'nik' => '456846687',
            'fasilitas' => 'VVIP',
        ]);
    }
}
