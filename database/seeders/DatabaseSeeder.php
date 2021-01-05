<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0, 160) as $item) {
            $data = [
                'class_id'   => rand(100, 999),
                'password'   => bcrypt('123456'),
                'sex'        => rand(0, 1) ? '男' : '女',
                'name'       => '张'.rand(0, 100),
                'phone'      => '133233000'.rand(10, 99),
                'id_number'  => '110112200'.rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9).rand(0, 9),
                'address'    => 'xxx',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
            DB::table('students')->insert($data);
        }
    }
}
