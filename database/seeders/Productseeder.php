<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products =
        [
        [
            'name' => 'Laptop',
            'description' => 'A high-performance laptop for all your needs.',
            'price' => 1200.00,
            'stock' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Smartphone',
            'description' => 'A sleek smartphone with the latest features.',
            'price' => 800.00,
            'stock' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Headphones',
            'description' => 'Noise-cancelling over-ear headphones.',
            'price' => 150.00,
            'stock' => 30,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Smartwatch',
            'description' => 'A stylish smartwatch with fitness tracking.',
            'price' => 200.00,
            'stock' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Gaming Mouse',
            'description' => 'Ergonomic gaming mouse with customizable buttons.',
            'price' => 50.00,
            'stock' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
    DB::table('products')->insert($products);
    }
}
