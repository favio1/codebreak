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
            'name' => 'PARLANTES',
            'cost' => 120,
            'price' => 170,
            'barcode' => '78452165',
            'stock' => 50,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'
        ]);
        Product::create([
            'name' => 'CAMARA DAHUA',
            'cost' => 100,
            'price' => 150,
            'barcode' => '78945612',
            'stock' => 50,
            'alerts' => 10,
            'category_id' => 2,
            'image' => 'camara.png'
        ]);
        Product::create([
            'name' => 'ROUTER TP-LINK',
            'cost' => 100,
            'price' => 150,
            'barcode' => '458112463',
            'stock' => 50,
            'alerts' => 10,
            'category_id' => 3,
            'image' => 'router.png'
        ]);
        Product::create([
            'name' => 'ASUS',
            'cost' => 100,
            'price' => 150,
            'barcode' => '89582542',
            'stock' => 50,
            'alerts' => 10,
            'category_id' => 4,
            'image' => 'asus.png'
        ]);
    }
}
