<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProcurementDetailFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'procurement_id' => rand(1, 10),
			'product_id' => rand(1, 5),
			'unit_price' => $this->faker->randomFloat,
			'qty' => rand(10000, 300000),
		];
	}
}
