<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SharesTableSeeder extends Seeder
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
            'share' => 'sharetest1',
        ];
        DB::table('shares')->insert($param);

        $param = [
            'user_id' => '2',
            'share' => 'sharetest2',
        ];
        DB::table('shares')->insert($param);

        $param = [
            'user_id' => '2',
            'share' => 'sharetest3',
        ];
        DB::table('shares')->insert($param);
    }
}
