<?php

namespace Database\Seeders;

use App\Models\Categoryables;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoryables::create(['category_id'=>1,'categoryable_id'=>1,'categoryable_type'=>"App\Models\Product"]);
        Categoryables::create(['category_id'=>1,'categoryable_id'=>1,'categoryable_type'=>"App\Models\Post"]);
        Categoryables::create(['category_id'=>2,'categoryable_id'=>1,'categoryable_type'=>"App\Models\Product"]);
        Categoryables::create(['category_id'=>3,'categoryable_id'=>2,'categoryable_type'=>"App\Models\Post"]);
    }
}
