<?php

namespace Database\Seeders;

use App\Models\CarInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarInfo::create(['color'=>'blue','model'=>'automatic','year'=>'2023','car_id'=>2]);
        CarInfo::create(['color'=>'red','model'=>'automatic','year'=>'2020','car_id'=>1]);
        CarInfo::create(['color'=>'red','model'=>'automatic','year'=>'2020','car_id'=>3]);
        CarInfo::create(['color'=>'red','model'=>'automatic','year'=>'2020','car_id'=>4]);
    }
}
