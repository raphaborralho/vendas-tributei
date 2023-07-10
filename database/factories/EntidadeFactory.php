<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entidade>
 */
class EntidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cpfcnpj' => fake('pt-BR')->cnpj(),
            'cod_cliente' => fake()->randomNumber(8),
        ];
    }
}
