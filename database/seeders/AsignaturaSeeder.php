<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Para cada curso, crear 3 asignaturas
         Curso::all()->each(function ($curso) {
             Asignatura::factory(3)->create(['curso_id' => $curso->id]);
        });
    }
}
