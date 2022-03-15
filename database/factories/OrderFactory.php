<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $total = $this->faker->randomFloat;
        $amt = $total + 5.0;
        return [
            'customer_id' => rand(1, 10),
            'order_type' => rand(1, 3),
            'employee_id' => rand(1, 10),
            'email' => $this->faker->email,
            'receiver' => $this->faker->name,
            'ship_addr' => $this->faker->address,
            'total' => $total,
            'salestax' => 5.0,
            'amt' => $amt,
            'pmt_id' => rand(1, 10),
            'ship_id' => rand(1, 10),
            'order_guid' => $this->faker->ean8,
            'validation' => rand(0, 1),
            'closed' => rand(0, 1),
            'mgmr' => $this->faker->name,
            'remark' => $this->faker->realText
        ];
    }
}
