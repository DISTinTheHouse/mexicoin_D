<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        // Create categories
        Category::create([
            'name' => 'Oro',
            'description' => 'Monedas en Oro.',
        ]);
        Category::create([
            'name' => 'Plata',
            'description' => 'Monedas en Plata.',
        ]);
        Category::create([
            'name' => 'Billetes',
            'description' => 'Billestes en papel moneda.',
        ]);
        Category::create([
            'name' => 'Coleccion',
            'description' => 'Artículos de colección.',
        ]);
    }
}
