<?php

namespace Database\Seeders;

use App\Models\SaleDetail;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SaleDetailSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		SaleDetail::truncate();
		//建立新資料
		SaleDetail::factory()->times(20)->create();
	}
}
