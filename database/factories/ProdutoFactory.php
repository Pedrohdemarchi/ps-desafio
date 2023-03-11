<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'descricao' => $this->faker->text(50),
            'preco' => $this->faker->randomFloat(2, 0, 50),
            'quantidade' => $this->faker->numberBetween(1, 10),
            'image' => $this->faker->imageUrl(640, 480),
            'categoria_id' => $this->faker->numberBetween(1, 2),
        ];
    }
}
