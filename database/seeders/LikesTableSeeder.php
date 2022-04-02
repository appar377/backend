<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'share_id' => '1',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => '2',
            'share_id' => '1',
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => '3',
            'share_id' => '2',
        ];
        DB::table('likes')->insert($param);
    }
}
