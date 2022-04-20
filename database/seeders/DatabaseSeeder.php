<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Alfredo Gonzalez',
            'email' => 'dev@agenciavandu.com',
            'password' => Hash::make('marencos6359:D'),
        ]);
        $this->call(DivisaSeeder::class);
        $this->call(ResourceSeeder::class);
        $this->call(SliderSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
