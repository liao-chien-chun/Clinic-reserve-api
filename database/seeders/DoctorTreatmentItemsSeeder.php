<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorTreatmentItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctor_treatment_items')->insert([
            ['user_id' => 1, 'treatment_item_id' => 1],
            ['user_id' => 1, 'treatment_item_id' => 2],
            ['user_id' => 1, 'treatment_item_id' => 3],
            ['user_id' => 1, 'treatment_item_id' => 4],
            ['user_id' => 1, 'treatment_item_id' => 5],
            ['user_id' => 2, 'treatment_item_id' => 6],
            ['user_id' => 2, 'treatment_item_id' => 7],
            ['user_id' => 2, 'treatment_item_id' => 8],
            ['user_id' => 2, 'treatment_item_id' => 9],
            ['user_id' => 2, 'treatment_item_id' => 10],
            ['user_id' => 3, 'treatment_item_id' => 11],
            ['user_id' => 3, 'treatment_item_id' => 12],
            ['user_id' => 3, 'treatment_item_id' => 13],
            ['user_id' => 3, 'treatment_item_id' => 14],
            ['user_id' => 3, 'treatment_item_id' => 15],
            ['user_id' => 4, 'treatment_item_id' => 1],
            ['user_id' => 4, 'treatment_item_id' => 2],
            ['user_id' => 4, 'treatment_item_id' => 3],
            ['user_id' => 4, 'treatment_item_id' => 4],
            ['user_id' => 4, 'treatment_item_id' => 5],
            ['user_id' => 5, 'treatment_item_id' => 6],
            ['user_id' => 5, 'treatment_item_id' => 7],
            ['user_id' => 5, 'treatment_item_id' => 8],
            ['user_id' => 5, 'treatment_item_id' => 9],
            ['user_id' => 5, 'treatment_item_id' => 10],
            ['user_id' => 6, 'treatment_item_id' => 11],
            ['user_id' => 6, 'treatment_item_id' => 12],
            ['user_id' => 6, 'treatment_item_id' => 13],
            ['user_id' => 6, 'treatment_item_id' => 14],
            ['user_id' => 6, 'treatment_item_id' => 15],
            ['user_id' => 7, 'treatment_item_id' => 1],
            ['user_id' => 7, 'treatment_item_id' => 2],
            ['user_id' => 7, 'treatment_item_id' => 3],
            ['user_id' => 7, 'treatment_item_id' => 4],
            ['user_id' => 7, 'treatment_item_id' => 5],
            ['user_id' => 8, 'treatment_item_id' => 6],
            ['user_id' => 8, 'treatment_item_id' => 7],
            ['user_id' => 8, 'treatment_item_id' => 8],
            ['user_id' => 8, 'treatment_item_id' => 9],
            ['user_id' => 8, 'treatment_item_id' => 10],
            ['user_id' => 9, 'treatment_item_id' => 11],
            ['user_id' => 9, 'treatment_item_id' => 12],
            ['user_id' => 9, 'treatment_item_id' => 13],
            ['user_id' => 9, 'treatment_item_id' => 14],
            ['user_id' => 9, 'treatment_item_id' => 15],
        ]);
    }
}
