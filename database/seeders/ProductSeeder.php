<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
        $faker = Factory::create('zh_TW');

        for ($i = 0; $i < 100; $i++) {
            Product::create([
                'prod_name_c' => $faker->realText(10),
                'prod_name_e' => $faker->word,
                'unit' => '本',
                'itm_code' => $faker->isbn13,
                'supplier_id' => 1,
                'prod_id_in_supp' => $faker->ean8,
                'category_id' => 1,
                'prod_min' => rand(1, 4),
                'cost' => $faker->randomFloat,
                'unit_price' => $faker->randomFloat,
                'stk_qty' => rand(1, 4),
                'status' => $faker->randomElement($array = array('none', 'vip', 'normal')),
                'latestreceiptdate' => $faker->dateTime,
                'latestdeliverydate' => $faker->dateTime,
                'remark' => $faker->realText(30)
            ]);
        }
    }
}
