<?php

use Illuminate\Database\Seeder;
use\App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'category' => 'Garments'
        ]);
        Product::create([
            'category' => 'Electronics'
        ]);
        Product::create([
            'category' => 'Wardrobes'
        ]);
        Product::create([
            'category' => 'Tickets'
        ]);
        Product::create([
            'category' => 'Shoes'
        ]);
        Product::create([
            'category' => 'Books'
        ]);
        Product::create([
            'category' => 'Cosmetics'
        ]);
        Product::create([
            'category' => 'Others'
        ]);
    }
}
