<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plano>
 */
class PlanoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => 'Plano '. fake()->randomDigit(),
            'descricao' => fake('pt-BR')->text(),
            'valor' => fake()->randomFloat(),
            'tipo' => 'EMPRESARIAL',
            'status' => 1,
        ];
    }
}
