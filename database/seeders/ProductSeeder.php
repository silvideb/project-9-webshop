<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Test Product',
            'description' => 'Dit is een voorbeeldproduct om de winkelwagen te testen.',
            'price' => 19.99,
        ]);
    }
}
