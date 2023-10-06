<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->name,
            'price' => fake()->numerify(),
            'stock' => fake()->randomDigit(),
            'sold' => 0,
            'view' => 0,
            'category_id' => Category::query()->inRandomOrder()->first()->id,
        ];
    }
}
