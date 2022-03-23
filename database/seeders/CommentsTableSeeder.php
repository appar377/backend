<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'share_id' => '1',
            'comment' => 'commenttest1',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'share_id' => '1',
            'comment' => 'commenttest2',
        ];
        DB::table('comments')->insert($param);

        $param = [
            'share_id' => '2',
            'comment' => 'commenttest3',
        ];
        DB::table('comments')->insert($param);
    }
}
