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
        $products=[
            [
                'name' => '',
                'details' => '',
                'description' => '',
                'brand' => '',
                'price' => '',
                'shipping_cost' => '',
                'image_path' => ''
            ],
            [
                'name' => '',
                'details' => '',
                'description' => '',
                'brand' => '',
                'price' => '',
                'shipping_cost' => '',
                'image_path' => ''
            ]
        ];
    }
}
