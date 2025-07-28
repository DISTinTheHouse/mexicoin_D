<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Product::create([
            'name' => 'Smartphone XYZ',
            'description' => 'Latest model with advanced features.',
            'price' => 299.99,
            'category_id' => 1,
            'stock' => 50,
            'image' => 'https://example.com/images/smartphone_xyz.jpg',
        ]);

        Product::create([
            'name' => 'Book ABC',
            'description' => 'An insightful book on modern technology.',
            'price' => 19.99,
            'category_id' => 1,
            'stock' => 100,
            'image' => 'https://example.com/images/book_abc.jpg',
        ]);
        Product::create([
            'name' => 'T-Shirt 123',
            'description' => 'Comfortable cotton t-shirt with a stylish design.',
            'price' => 15.99,
            'category_id' => 3,
            'stock' => 200,
            'image' => 'https://example.com/images/tshirt_123.jpg',
        ]);
        Product::create([
            'name' => 'Kitchen Set',
            'description' => 'Complete kitchen set with essential tools.',
            'price' => 49.99,
            'category_id' => 1,
            'stock' => 30,
            'image' => 'https://example.com/images/kitchen_set.jpg',
        ]);
        Product::create([
            'name' => 'Running Shoes',
            'description' => 'Lightweight and durable running shoes.',
            'price' => 89.99,
            'category_id' => 4,
            'stock' => 75,
            'image' => 'https://example.com/images/running_shoes.jpg',
        ]);
        Product::create([
            'name' => 'Skincare Set',
            'description' => 'Complete skincare set for healthy skin.',
            'price' => 39.99,
            'category_id' => 4,
            'stock' => 60,
            'image' => 'https://example.com/images/skincare_set.jpg',
        ]);
        Product::create([
            'name' => 'Board Game',
            'description' => 'Fun and engaging board game for all ages.',
            'price' => 24.99,
            'category_id' => 4,
            'stock' => 120,
            'image' => 'https://example.com/images/board_game.jpg',
        ]);
        Product::create([
            'name' => 'Car Accessories Kit',
            'description' => 'Essential accessories for your car.',
            'price' => 59.99,
            'category_id' => 2,
            'stock' => 40,
            'image' => 'https://example.com/images/car_accessories_kit.jpg',
        ]);
        Product::create([
            'name' => 'Vinyl Record',
            'description' => 'Classic vinyl record of your favorite artist.',
            'price' => 29.99,
            'category_id' => 2,
            'stock' => 80,
            'image' => 'https://example.com/images/vinyl_record.jpg',
        ]);
        Product::create([
            'name' => 'Smartwatch',
            'description' => 'Stylish smartwatch with fitness tracking features.',
            'price' => 199.99,
            'category_id' => 2,
            'stock' => 45,
            'image' => 'https://example.com/images/smartwatch.jpg',
        ]);
        Product::create([
            'name' => 'Yoga Mat',
            'description' => 'High-quality yoga mat for comfort and stability.',
            'price' => 29.99,
            'category_id' => 2,
            'stock' => 90,
            'image' => 'https://example.com/images/yoga_mat.jpg',
        ]);
        Product::create([
            'name' => 'Wireless Earbuds',
            'description' => 'Compact and high-quality wireless earbuds.',
            'price' => 79.99,
            'category_id' => 3,
            'stock' => 100,
            'image' => 'https://example.com/images/wireless_earbuds.jpg',
        ]);
        Product::create([
            'name' => 'Coffee Maker',
            'description' => 'Automatic coffee maker for a perfect brew.',
            'price' => 89.99,
            'category_id' => 3,
            'stock' => 50,
            'image' => 'https://example.com/images/coffee_maker.jpg',
        ]);
        Product::create([
            'name' => 'Fitness Tracker',
            'description' => 'Advanced fitness tracker with heart rate monitor.',
            'price' => 49.99,
            'category_id' => 3,
            'stock' => 70,
            'image' => 'https://example.com/images/fitness_tracker.jpg',
        ]);
    }
}
