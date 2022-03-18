<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'lot_id' => $this->faker->ean8,
			'customer_id' => rand(1, 100),
			'product_id' => rand(1, 5),
			'unit_price' => $this->faker->randomFloat,
			'qty' => rand(1, 10),
		];
	}
}
