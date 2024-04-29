<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatment_items')->insert([
            ['item_name' => '基礎治療', 'created_at' => now()],
            ['item_name' => '定期檢查/3M塗氟', 'created_at' => now()],
            ['item_name' => 'ClearCorrect隱形矯正', 'created_at' => now()],
            ['item_name' => '3M陶瓷矯正', 'created_at' => now()],
            ['item_name' => '矯正治療', 'created_at' => now()],
            ['item_name' => '植牙治療', 'created_at' => now()],
            ['item_name' => '美白/貼片', 'created_at' => now()],
            ['item_name' => '智齒拔除', 'created_at' => now()],
            ['item_name' => '兒童治療', 'created_at' => now()],
            ['item_name' => '根管治療', 'created_at' => now()],
            ['item_name' => '牙周治療', 'created_at' => now()],
            ['item_name' => '假牙', 'created_at' => now()],
            ['item_name' => '睡眠呼吸中止症諮詢', 'created_at' => now()],
            ['item_name' => '正顎手術', 'created_at' => now()],
            ['item_name' => '顳顎關節', 'created_at' => now()],
        ]);
    }
}
