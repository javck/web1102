<?php

namespace Database\Seeders;

use App\Models\OrderDetail;
use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderDetail::truncate();

        OrderDetail::create([
            'order_id' => 1,
            'product_id' => 1,
            'unit_price' => 100,
            'prod_qty' => 1,
        ]);
    }
}
