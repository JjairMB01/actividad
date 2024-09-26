<?php

namespace Database\Seeders;

use App\Models\Matriculacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatriculacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Matriculacion::factory(20)->create();
    }
}
