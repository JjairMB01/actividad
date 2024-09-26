<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $cursos = ['601','602','603','604','605'];

        return [
            'nombre' => $this->faker->randomElement($cursos),
            'descripcion' => $this->faker->paragraph,
        ];
    }
}
