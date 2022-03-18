<?php

namespace Database\Seeders;

use App\Models\Procurement;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProcurementSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		Procurement::truncate();
		//建立新資料
		Procurement::factory()->times(10)->create();
	}
}
