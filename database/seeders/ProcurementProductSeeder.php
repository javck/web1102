<?php

namespace Database\Seeders;

use App\Models\ProcurementProduct;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProcurementProductSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		ProcurementProduct::truncate();
		//建立新資料
		ProcurementProduct::factory()->times(20)->create();
	}
}
