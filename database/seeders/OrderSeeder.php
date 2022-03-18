<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Factory;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		Order::truncate();
		//建立新資料
		Order::factory()->times(10)->create();
	}
}
