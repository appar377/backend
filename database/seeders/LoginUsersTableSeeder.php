<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoginusersTableSeeder extends Seeder
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
            'share' => 'テスト1',
            'comment' => 'コメント1'
        ];
        DB::table('loginusers')->insert($param);

        $param = [
            'name' => 'key',
            'email' => 'test2@example.com',
            'share' => 'テスト2',
            'comment' => 'コメント2'
        ];
        DB::table('loginusers')->insert($param);

        $param = [
            'name' => 'tom',
            'email' => 'test3@example.com',
            'share' => 'テスト3',
            'comment' => 'コメント3'
        ];
        DB::table('loginusers')->insert($param);
    }
}
