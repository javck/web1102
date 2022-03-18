<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SaleDetailFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'sale_id' => rand(1, 10),
			'product_id' => rand(1, 5),
			'unit_price' => $this->faker->randomFloat,
			'qty' => rand(1, 300),
		];
	}
}
