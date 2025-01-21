<?php

namespace Database\Seeders;

use App\Models\BienDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BienDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BienDetails::factory(40)->create();
    }
}
