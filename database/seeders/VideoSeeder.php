<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Video::create(['url'=>"url 1",'videoable_id'=>1,'videoable_type'=>"App\Models\Product"]);
        Video::create(['url'=>"url 2",'videoable_id'=>1,'videoable_type'=>"App\Models\Post"]);
    }
}
