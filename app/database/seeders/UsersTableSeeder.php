<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'first_name' => 'テスト',
            'last_name' => 'テスト',
            'email' => 'test@test.com',
            'phone_number' => '12312341234',
            'password' => '111aaa',
            'status' => 1,
            'age' => 27,
            'gender' => 1,
        ];
        DB::table('users')->insert($param);

        $param = [
            'first_name' => '佐藤',
            'last_name' => 'テスト',
            'email' => 'sato@test.com',
            'phone_number' => '12312341235',
            'password' => '111aaa',
            'status' => 1,
            'age' => 28,
            'gender' => 2,
        ];
        DB::table('users')->insert($param);

        $param = [
            'first_name' => '鈴木',
            'last_name' => 'テスト',
            'email' => 'suzuki@test.com',
            'phone_number' => '12312341236',
            'password' => '111aaa',
            'status' => 1,
            'age' => 26,
            'gender' => 1,
        ];
        DB::table('users')->insert($param);
    }
}
