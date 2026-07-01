<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['name' => 'Sample Product 1', 'description' => 'First sample.', 'price' => 19.99],
            ['name' => 'Sample Product 2', 'description' => 'Second sample.', 'price' => 29.99],
            ['name' => 'Sample Product 3', 'description' => 'Third sample.', 'price' => 39.99],
        ]);
    }
}
