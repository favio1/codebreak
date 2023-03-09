<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'PERIFERICOS',
            'image' => 'http://dummyimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'CAMARAS',
            'image' => 'http://dummyimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'ROUTERS',
            'image' => 'http://dummyimage.com/200x150/5c5756/fff'
        ]);
        Category::create([
            'name' => 'LAPTOPS',
            'image' => 'http://dummyimage.com/200x150/5c5756/fff'
        ]);
    }
}
