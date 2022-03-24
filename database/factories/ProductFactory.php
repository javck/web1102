<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition()
	{
		$cost = $this->faker->randomFloat;
		$price = $cost * 1.5;
		return [
			'name' => $this->faker->name,
			'itm_code' => $this->faker->isbn13,
			'supplier_id' => rand(1, 5),
			'category_id' => rand(1, 2),
			'min_qty' => 5000,
			'cost' => $this->faker->randomFloat,
			'unit_price' => $this->faker->randomFloat,
			'qty_instock' => rand(1000, 20000),
		];
	}
}
