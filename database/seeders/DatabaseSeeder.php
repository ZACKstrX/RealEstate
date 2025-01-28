<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();


        User::create([
            'password' => bcrypt('adiladil'),
            'email' => 'adil@adil.com',
            'first_name' => 'adil',
            'last_name' => 'adil',
            'phone_number' => '061275455'
        ]);


        // $this->call(CitySeeder::class);
        // $this->call(TypeBienSeeder::class);
        // $this->call(StatueSeeder::class);
        // $this->call(EtatSeeder::class);
        // $this->call(BienSeeder::class);
        // $this->call(BienDetailSeeder::class);
 
    }
}
