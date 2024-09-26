<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asignatura>
 */
class AsignaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $asignaturas = ['matematicas','español','estadistica','ingles'];

        //relacion curso_id -> Curso::factory()
        return [
            'nombre' => $this->faker->randomElement($asignaturas),
            'descripcion' => $this->faker->paragraph,
            'curso_id' => Curso::factory(), 
        ];
    }
}
