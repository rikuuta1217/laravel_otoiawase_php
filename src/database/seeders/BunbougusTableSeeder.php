<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bunbougu;

class BunbougusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            {
                Bunbougu::factory()->count(10)->create();
            }
            // DB::table('bunbougus')->insert([

            // [
            //     'name' => '2B鉛筆',
            //     'kakaku' => '100',
            //     'bunrui' => '1',
            //     'shosai' => '小学生の間で非常に好まれています。特に低学年にオススメです。',
            // ],
            // [
            //     'name' => '3B鉛筆',
            //     'kakaku' => '200',
            //     'bunrui' => '1',
            //     'shosai' => '小学生の間で非常に好まれています。特に高学年にオススメです。',
            // ],
            // [
            //     'name' => 'B鉛筆',
            //     'kakaku' => '150',
            //     'bunrui' => '1',
            //     'shosai' => '小学生の間で非常に好まれています。特に中学年や保護者にもオススメです。',
            // ],
            //]);
    }
}
