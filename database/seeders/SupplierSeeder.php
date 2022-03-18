<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Faker\Factory;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		Supplier::truncate();
		//建立新資料
		Supplier::factory()->times(5)->create();
	}
}
