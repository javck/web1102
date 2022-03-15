<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();

        Order::create([
            'customer_id' => 1,
            'order_type' => 1,
            'employee_id' => 1,
            'email' => 'javck@demo.com',
            'receiver' => 'Tom',
            'ship_addr' => '中山路一號',
            'total' => 100.0,
            'salestax' => 5.0,
            'amt' => 105.0,
            'pmt_id' => 1,
            'ship_id' => 1,
            'order_guid' => 'abcd',
            'validation' => 1,
            'closed' => 1,
            'mgmr' => '王二頭',
            'remark' => 'dfjdkfjdkjfkdj'
        ]);
    }
}
