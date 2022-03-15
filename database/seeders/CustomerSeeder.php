<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

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

        Customer::create([
            'cust_id' => 5,
            'cust_name_c' => '王大頭',
            'cust_name_e' => 'Big Head Wang',
            'ear_no' => '12345678',
            'cust_eid' => '87654321',
            'contact' => '小美',
            'gender' => 'm',
            'addr' => '中山路一號',
            'addr2' => '中山路二號',
            'birth' => Carbon::parse('1988-01-01'),
            'cust_tel' => '02-11111111',
            'cust_email' => 'zz@demo.com',
            'memstate' => 1,
            'userid' => 'jack',
            'pwd' => 'djfkdjfkajdfkdjfd',
            'bank' => 'A13',
            'acct' => '012345678',
            'acc_group' => '1342',
            'ac_sub' => '15',
            'valid_code' => '110',
            'validated' => 1,
            'lastpuchasedate' => Carbon::parse('2022-01-01'),
            'remark' => 'djfkdjfkddfjkdjfkdjfkdjfjdk'
        ]);
    }
}
