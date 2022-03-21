<?php

namespace Database\Seeders;

use App\Models\ProductSale;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSaleSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		//把資料全部清光
		ProductSale::truncate();
		//建立新資料
		ProductSale::factory()->times(20)->create();
	}
}
