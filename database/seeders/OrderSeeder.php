<?php

namespace Database\Seeders;

use App\Models\Order;
use Faker\Factory;
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
        Order::factory()->times(100)->create();
    }
}
