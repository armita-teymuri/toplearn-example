<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(['name'=>'product 1']);
        Product::create(['name'=>'product 2']);
        Product::create(['name'=>'product 3']);
        Product::create(['name'=>'product 4']);
    }
}
