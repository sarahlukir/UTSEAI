<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Product::create([
        'name' => 'Espresso',
        'description' => 'Kopi hitam pekat dengan rasa kuat.',
        'price' => 20000
    ]);
    Product::create([
        'name' => 'Latte',
        'description' => 'Campuran espresso dan susu.',
        'price' => 25000
    ]);
    Product::create([
        'name' => 'Iced Aren Latte',
        'description' => 'Perpaduan kopi dengan gula aren yang nikmat.',
        'price' => 25000,
    ]);
}
}
