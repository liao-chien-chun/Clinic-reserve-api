<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => '王大明'],
            ['name' => '廖大明'],
            ['name' => '黃大明'],
            ['name' => '林大明'],
            ['name' => '陳大明'],
            ['name' => '蔡大明'],
            ['name' => '石大明'],
            ['name' => '李大明'],
            ['name' => '張大明'],
        ]);
    }
}
