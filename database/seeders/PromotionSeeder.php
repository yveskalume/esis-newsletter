<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Promotion::create([
            "name" => "Préparatoire"
        ]);
        Promotion::create([
            "name" => "L1"
        ]);
        Promotion::create([
            "name" => "L2"
        ]);
        Promotion::create([
            "name" => "L3"
        ]);
    }
}
