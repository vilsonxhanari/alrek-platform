<?php

namespace Database\Seeders;

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
            [
                'name' => 'Phone',
                'details' => 'Vietnam',
                'description' => 'Made in 2024 ',
                'brand' => 'Apple',
                'price' => 26.6,
                'shipping_cost' => '5',
                'image_path' => 'storage/img.php'
            ],
            [
                'name' => 'Phone',
                'details' => 'Vietnam',
                'description' => 'Made in 2024 ',
                'brand' => 'Apple',
                'price' => 26.6,
                'shipping_cost' => '5',
                'image_path' => 'storage/img.php'
            ],
        ];

        foreach ($products as $key => $value) {

            Product::create($value);
        }
    }
}
