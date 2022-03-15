<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cust_id' => rand(1, 10),
            'cust_name_c' => $this->faker->name,
            'cust_name_e' => $this->faker->name,
            'ear_no' => $this->faker->ean8,
            'cust_eid' => $this->faker->ean13,
            'contact' => $this->faker->name,
            'gender' => $this->faker->randomElement($array = array('m', 'f')),
            'addr' => $this->faker->address,
            'addr2' => $this->faker->address,
            'birth' => $this->faker->dateTime,
            'cust_tel' => $this->faker->phoneNumber,
            'cust_email' => $this->faker->email,
            'memstate' => rand(1, 3),
            'userid' => $this->faker->userName,
            'pwd' => $this->faker->password,
            'bank' => $this->faker->countryCode,
            'acct' => $this->faker->swiftBicNumber,
            'acc_group' => '1342',
            'ac_sub' => '15',
            'valid_code' => $this->faker->numberBetween(100, 999),
            'validated' => rand(0, 1),
            'lastpuchasedate' => $this->faker->dateTime,
            'remark' => $this->faker->realtext(50)
        ];
    }
}
