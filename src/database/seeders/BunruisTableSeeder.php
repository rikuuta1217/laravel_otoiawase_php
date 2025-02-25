<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BunruisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bunruis')->insert([
            [
                'str' => '鉛筆',
            ],
            [
                'str' => 'ボールペン',
            ],
            [
                'str' => '消しゴム',
            ],
        ]);
    }
}


