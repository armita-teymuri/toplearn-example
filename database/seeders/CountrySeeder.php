<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create(['name'=>'iran']);
        Country::create(['name'=>'china']);
        Country::create(['name'=>'japan']);
        Country::create(['name'=>'usa']);


    }
}
