<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;


class UserSeeder extends Seeder
{
    public function run()
    {

        User::truncate();
        $faker = Faker::create();
        //加入超級管理者
        User::create([
            'id' => 1,
            'name' => '超級管理員',
            'email' => 'super@demo.com',
            'password' => bcrypt('passw0rd'),
            'role_id' => 3,
            'avatar' => 'users/default.png'
        ]);
        //加入展示管理者
        User::create([
            'id' => 2,
            'name' => '管理員',
            'email' => 'admin@demo.com',
            'password' => bcrypt('passw0rd'),
            'role_id' => 1,
            'avatar' => 'users/default.png'
        ]);
        //加入展示用戶
        User::create([
            'id' => 3,
            'name' => '使用者',
            'email' => 'user@demo.com',
            'password' => bcrypt('passw0rd'),
            'role_id' => 2,
            'avatar' => 'users/default.png'
        ]);
    }
}
