<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'name' => $this->faker->name,
			'ear_no' => $this->faker->ean8,
			'address' => $this->faker->address,
			'inv_addr' => $this->faker->address,
			'phone' => $this->faker->phoneNumber,
			'contact' => $this->faker->name,
			'email' => $this->faker->email,
			'owner' => $this->faker->name,
			'contract_start' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'userid' => $this->faker->userName,
			'pwd' => $this->faker->password,
			'status' => $this->faker->randomElement($array = array('臨時', '普通', '優質')),
		];
	}
}
