<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create(['content'=>"content 1",'newsable_id'=>1,'newsable_type'=>"App\Models\Post"]);
        News::create(['content'=>"content 2",'newsable_id'=>1,'newsable_type'=>"App\Models\Product"]);

    }
}
