<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        // Mobil::create([
        //     "title" => "Brio",
        //     "slug" => "brio1",
        //     "image" => "brio.png",
        //     "harga" => "200.000.000"
        // ]);
        // Mobil::create([
        //     "title" => "Brio",
        //     "slug" => "brio2",
        //     "image" => "brio.png",
        //     "harga" => "200.000.000"
        // ]);
        // Mobil::create([
        //     "title" => "Brio",
        //     "slug" => "brio3",
        //     "image" => "brio.png",
        //     "harga" => "200.000.000"
        // ]);
    }
}
