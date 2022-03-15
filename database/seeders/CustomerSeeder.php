<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Factory;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //把資料全部清光
        Customer::truncate();
        //建立新資料
        Customer::factory()->times(100)->create();
    }
}
