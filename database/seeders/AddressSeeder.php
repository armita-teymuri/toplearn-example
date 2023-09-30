<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Post;
use App\Models\User;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $address = Address::factory()->count(30)->create();
        
        
    
    }
}
