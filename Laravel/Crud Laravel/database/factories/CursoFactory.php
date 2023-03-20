<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Iluminate\Support\Str;
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
        return [
            'name' => $this->faker->sentence(), 
            'description' => $this->faker->paragraph(), 
            'category' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
