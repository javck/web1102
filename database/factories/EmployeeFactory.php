<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory {
	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'name' => $this->faker->name,
			'department' => $this->faker->randomElement($array = array('工程部', '營業部', '秘書處', '總管理室')),
			'rank' => $this->faker->randomElement($array = array('專員', '作業員', '工程師', '經理')),
			'personal_id' => $this->faker->ean8,
			'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
			'gender' => $this->faker->randomElement($array = array('F', 'M')),
			'address' => $this->faker->address,
			'phone' => $this->faker->phoneNumber,
			'email' => $this->faker->email,
			'status' => $this->faker->randomElement($array = array('正職', '臨時', '約聘', '離職')),
		];
	}
}
