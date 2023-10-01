<?php

namespace Database\Seeders;

use App\Models\ProductTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductTag::create(['tag_id'=>1,'product_id'=>1]);
        ProductTag::create(['tag_id'=>2,'product_id'=>1]);
        ProductTag::create(['tag_id'=>2,'product_id'=>2]);
        ProductTag::create(['tag_id'=>3,'product_id'=>2]);
    }
}
