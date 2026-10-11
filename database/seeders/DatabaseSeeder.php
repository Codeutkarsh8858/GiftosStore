<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $c1 = \App\Models\Category::firstOrCreate(['category' => 'Watches']);
        $c2 = \App\Models\Category::firstOrCreate(['category' => 'Bags & Accessories']);
        $c3 = \App\Models\Category::firstOrCreate(['category' => 'Festive Gifts']);

        $demoProducts = [
            [
                'product_title' => 'Luxury Chronograph Watch',
                'product_description' => 'Premium stainless steel water-resistant watch with sapphire crystal glass.',
                'product_quantity' => 12,
                'product_price' => 2499,
                'product_image' => '1784525388.jpg',
                'category_id' => $c1->id
            ],
            [
                'product_title' => 'Designer Leather Handbag',
                'product_description' => 'Elegant and spacious leather handbag suitable for casual and party wear.',
                'product_quantity' => 20,
                'product_price' => 1899,
                'product_image' => '1784525812.jpg',
                'category_id' => $c2->id
            ],
            [
                'product_title' => 'Smart Wireless Audio Headset',
                'product_description' => 'Noise-cancelling wireless Bluetooth headphones with ultra-deep bass.',
                'product_quantity' => 30,
                'product_price' => 2999,
                'product_image' => '1784527329.jpg',
                'category_id' => $c3->id
            ],
            [
                'product_title' => 'Vintage Luxury Gift Box Set',
                'product_description' => 'Curated festive combo with handmade collectibles and premium wrapping.',
                'product_quantity' => 15,
                'product_price' => 1499,
                'product_image' => '1784527706.jpg',
                'category_id' => $c3->id
            ],
            [
                'product_title' => 'Classic Heritage Watch',
                'product_description' => 'Timeless analogue design crafted with genuine leather strap.',
                'product_quantity' => 18,
                'product_price' => 2199,
                'product_image' => '1784528171.jpg',
                'category_id' => $c1->id
            ],
            [
                'product_title' => 'Handcrafted Floral Gift Pack',
                'product_description' => 'Unique celebratory gift hamper for special anniversaries and birthdays.',
                'product_quantity' => 25,
                'product_price' => 999,
                'product_image' => '1784528726.jpg',
                'category_id' => $c3->id
            ],
        ];

        foreach ($demoProducts as $prod) {
            \App\Models\Product::firstOrCreate(
                ['product_title' => $prod['product_title']],
                $prod
            );
        }
    }
}
