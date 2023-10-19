<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrdersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $quantity = random_int(1, 10);

        $product = Product::query()->inRandomOrder()->first();
        //dd( User::query()->inRandomOrder()->first());
        return [
            'customer_id' => User::query()->inRandomOrder()->first(),
            'product_id' => $product->id,
            'quantity' => $quantity,
            'total' => $quantity * $product->price
            ];
    }
}
