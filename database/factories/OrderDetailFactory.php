<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' => rand(1, 100),
            'product_id' => rand(1, 10),
            'unit_price' => rand(100, 150),
            'prod_qty' => rand(1, 3),
        ];
    }
}
