<?php

namespace Database\Seeders;

use App\Models\Sale;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SaleSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		Sale::truncate();
		//建立新資料
		Sale::factory()->times(10)->create();
	}
}
