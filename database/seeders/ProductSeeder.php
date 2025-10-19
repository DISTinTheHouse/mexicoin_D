<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder {

    /**
     * Run the database seeds.
     */
    public function run(): void {
        
        Product::create([
            'name' => 'Moneda oro 20 pesos Maximiliano TEST',
            'description' => '',
            'price' => 81200.00,
            'category_id' => 1,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_613307-MLM71085504090_082023-O-moneda-centenario-oro-20-pesos-maximiliano-1866-coleccion.webp',
            'coin_base' => 81200.00,
            'coin_base_type' => 'gold',
            'is_featured' => true,
        ]);
        Product::create([
            'name' => 'Moneda oro 0 TEST',
            'description' => '',
            'price' => 81200.00,
            'category_id' => 1,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_613307-MLM71085504090_082023-O-moneda-centenario-oro-20-pesos-maximiliano-1866-coleccion.webp',
            'coin_base' => 81200.00,
            'coin_base_type' => 'gold',
            'is_featured' => true,
        ]);
        Product::create([
            'name' => 'Moneda oro 1 TEST',
            'description' => '',
            'price' => 81200.00,
            'category_id' => 1,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_613307-MLM71085504090_082023-O-moneda-centenario-oro-20-pesos-maximiliano-1866-coleccion.webp',
            'coin_base' => 81200.00,
            'coin_base_type' => 'gold',
            'is_featured' => true,
        ]);
        Product::create([
            'name' => 'Moneda oro 2 TEST',
            'description' => '',
            'price' => 81200.00,
            'category_id' => 1,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_613307-MLM71085504090_082023-O-moneda-centenario-oro-20-pesos-maximiliano-1866-coleccion.webp',
            'coin_base' => 81200.00,
            'coin_base_type' => 'gold',
            'is_featured' => true,
        ]);


        //Monedas plata
        Product::create([
            'name' => 'Moneda plata 0 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 2,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://m.media-amazon.com/images/I/61UBZNwwc-L._SY1000_.jpg',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
        ]);
        //Monedas plata
        Product::create([
            'name' => 'Moneda plata 1 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 2,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://m.media-amazon.com/images/I/61UBZNwwc-L._SY1000_.jpg',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
            'is_featured' => true,
        ]);
        //Monedas plata
        Product::create([
            'name' => 'Moneda plata 2 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 2,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://m.media-amazon.com/images/I/61UBZNwwc-L._SY1000_.jpg',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
            'is_featured' => true,
        ]);
        //Monedas plata
        Product::create([
            'name' => 'Moneda plata 3 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 2,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://m.media-amazon.com/images/I/61UBZNwwc-L._SY1000_.jpg',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
        ]);


        //Billetes
        Product::create([
            'name' => 'Billete 0 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 3,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://www.elimparcial.com/resizer/v2/SGXSALK4V5GAFMIPOSQ5BXH7PI.jpg?auth=38c52cf3bf4e491f1a6c5e31283996cc994feeb62ca1bf36618dd0438090e907&smart=true&width=1200&height=800&quality=70',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
            'is_featured' => true,
        ]);
        Product::create([
            'name' => 'Billete 1 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 3,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://www.elimparcial.com/resizer/v2/SGXSALK4V5GAFMIPOSQ5BXH7PI.jpg?auth=38c52cf3bf4e491f1a6c5e31283996cc994feeb62ca1bf36618dd0438090e907&smart=true&width=1200&height=800&quality=70',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
        ]);
        Product::create([
            'name' => 'Billete 2 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 3,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://www.elimparcial.com/resizer/v2/SGXSALK4V5GAFMIPOSQ5BXH7PI.jpg?auth=38c52cf3bf4e491f1a6c5e31283996cc994feeb62ca1bf36618dd0438090e907&smart=true&width=1200&height=800&quality=70',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
        ]);
        Product::create([
            'name' => 'Billete 3 TEST',
            'description' => '',
            'price' => 890.00,
            'category_id' => 3,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://www.elimparcial.com/resizer/v2/SGXSALK4V5GAFMIPOSQ5BXH7PI.jpg?auth=38c52cf3bf4e491f1a6c5e31283996cc994feeb62ca1bf36618dd0438090e907&smart=true&width=1200&height=800&quality=70',
            'coin_base' => 890.00,
            'coin_base_type' => 'silver',
        ]);


        //Numismatica
        Product::create([
            'name' => 'Moneda numismatica 0 TEST',
            'description' => '',
            'price' => 13900.00,
            'category_id' => 5,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_929558-MLM49389322909_032022-O-1893-cc-un-dolar-morgan-vf-tono-mal-estado-moneda-rara-plata.webp',
            'is_featured' => true,
        ]);
        Product::create([
            'name' => 'Moneda numismatica 1 TEST',
            'description' => '',
            'price' => 13900.00,
            'category_id' => 5,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_929558-MLM49389322909_032022-O-1893-cc-un-dolar-morgan-vf-tono-mal-estado-moneda-rara-plata.webp',
        ]);
        Product::create([
            'name' => 'Moneda numismatica 2 TEST',
            'description' => '',
            'price' => 13900.00,
            'category_id' => 5,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_929558-MLM49389322909_032022-O-1893-cc-un-dolar-morgan-vf-tono-mal-estado-moneda-rara-plata.webp',
        ]);
        Product::create([
            'name' => 'Moneda numismatica 3 TEST',
            'description' => '',
            'price' => 13900.00,
            'category_id' => 5,
            'stock' => 13,
            'multiplier' => 1.0,
            'image' => 'https://http2.mlstatic.com/D_NQ_NP_929558-MLM49389322909_032022-O-1893-cc-un-dolar-morgan-vf-tono-mal-estado-moneda-rara-plata.webp',
            'is_featured' => true,
        ]);

    }
}
