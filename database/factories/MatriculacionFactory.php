<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Estudiante;
use App\Models\Matriculacion;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matriculacion>
 */
class MatriculacionFactory extends Factory
{

    protected $model = Matriculacion::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estudiante_id' => Estudiante::factory(), // Relacionar con un estudiante
            'curso_id' => Curso::factory(), // Relacionar con un curso
            'fecha_matriculacion' => $this->faker->date(),
        ];
    }
}
