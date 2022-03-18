<?php

namespace Database\Seeders;

use App\Models\ProcurementDetail;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProcurementDetailSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		ProcurementDetail::truncate();
		//建立新資料
		ProcurementDetail::factory()->times(20)->create();
	}
}
