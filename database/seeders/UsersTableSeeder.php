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
            'name' => 'tony',
            'email' => 'test1@example.com',
            'password' => 'aaaaaa',
            'like_count' => 0
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'key',
            'email' => 'test2@example.com',
            'password' => 'bbbbbb',
            'like_count' => 0
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'tom',
            'email' => 'test3@example.com',
            'password' => 'cccccc',
            'like_count' => 0
        ];
        DB::table('users')->insert($param);
    }
}
