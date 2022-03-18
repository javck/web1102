<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProcurementFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		$total = $this->faker->randomFloat;
		$tax = $total * 0.05;
		$amount = $total + $tax;
		return [
			'supplier_id' => rand(1, 5),
			'originator' => $this->faker->address,
			'employee_id' => rand(1, 100),
			'type' => 1,
			'invoice' => $this->faker->ean13,
			'sub_total' => $total,
			'discount' => 0,
			'tax' => $tax,
			'paid_amount' => $amount,
			'payment' => $this->faker->randomElement($array = array('線上付款', '貨到付款', '支票')),
			'shipping_state' => $this->faker->randomElement($array = array('待出貨', '快遞取件', '運送中', '驗關', '已到店', '查無此人', '遺失')),

		];
	}
}
