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
        $products = [
            ['name' => 'Product 1', 'price' => 10.99, 'country' => 'USA'],
            ['name' => 'Product 2', 'price' => 20.99, 'country' => 'Canada'],
            ['name' => 'Product 3', 'price' => 30.99, 'country' => 'UK'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
