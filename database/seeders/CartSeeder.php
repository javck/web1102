<?php

namespace Database\Seeders;

use App\Models\Cart;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		Cart::truncate();
		//建立新資料
		Cart::factory()->times(100)->create();
	}
}
