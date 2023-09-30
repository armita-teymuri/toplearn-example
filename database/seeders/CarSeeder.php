<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create(['name'=>'perid','user_id'=>'1']);
        Car::create(['name'=>'206','user_id'=>'3']);
        Car::create(['name'=>'samand','user_id'=>'2']);
        Car::create(['name'=>'dena','user_id'=>'4']);
    }
}
