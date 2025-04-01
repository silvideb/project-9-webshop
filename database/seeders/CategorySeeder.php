<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories =
        [
        [
            'name' => 'Electronics',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'name' => 'Furniture',
            'created_at' => now(),
            'updated_at' => now(),
        ],
    ];
    DB::table('categories')->insert($categories);
    }
}