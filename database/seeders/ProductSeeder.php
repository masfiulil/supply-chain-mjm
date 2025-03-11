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
        Product::create([
            'name' => 'Steel Rod',
            'description' => 'High-quality steel rod',
            'price' => 50000,
            'cost_price' => 35000,
            'supplier_id' => 1, // ABC Supplies
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Aluminum Sheet',
            'description' => 'Lightweight aluminum sheet',
            'price' => 70000,
            'cost_price' => 50000,
            'supplier_id' => 2, // XYZ Industries
            'stock' => 50,
        ]);
    }
}
