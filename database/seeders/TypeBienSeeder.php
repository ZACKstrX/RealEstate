<?php

namespace Database\Seeders;

use App\Models\TypeBien;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeBienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeBien::factory(4)->create();
    }
}
