<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Bob',
            'email' => 'bob@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'John',
            'email' => 'john@gmail.com',
        ]);
        User::factory()->create([
            'name' => 'Elle',
            'email' => 'elle@gmail.com',
        ]);
        $genders = ['Men', 'Women', 'Kids', 'Unisex'];
        foreach ($genders as $gender) {
            \App\Models\Gender::factory()->create([
                'gender' => $gender,
            ]);
        }
        $cates = [
            ['name' => 'Dresses', 'cate_img' => 'dress.png'],
            ['name' => 'Tshirts', 'cate_img' => 'tshirt.png'],
            ['name' => 'Tops', 'cate_img' => 'Top.png'],
            ['name' => 'Sportwears', 'cate_img' => 'underwear.png'],
            ['name' => 'Nightwears', 'cate_img' => 'nightwear.png'],
            ['name' => 'Pants', 'cate_img' => 'pant.png'],
        ];
        foreach ($cates as $cate) {
            $imgPath = Storage::disk('public')->putFile('img/cateogries', new \Illuminate\Http\File(public_path('img/categories/' . $cate['cate_img'])));
            \App\Models\Category::factory()->create([
                'name' => $cate['name'],
                'cate_img' => $imgPath,
            ]);
        }
        $bestSeller = [
            [
                'name' => 'Jacquard-Knit Turtleneck Sweater', 
                'price' => 36000, 
                'category_id' => 3, 
                'product_id' => 1, 
                'gender_id' => 4, 
                'best_seller_img' => 'sweater1.avif',
            ],
            [
                'name' => 'Cable-Knit Sweater', 
                'price' => 35000, 
                'category_id' => 3, 
                'product_id' => 2, 
                'gender_id' => 2, 
                'best_seller_img' => 'sweater2.avif',
            ],
            [
                'name' => 'Cable-Knit Turtleneck Sweater', 
                'price' => 34000, 
                'category_id' => 3,  
                'product_id' => 3,
                'gender_id' => 4, 
                'best_seller_img' => 'sweater3.avif',
            ],
            [
                'name' => 'Rib-Knit Mock Turtleneck Sweater', 
                'price' => 33000, 
                'category_id' => 3, 
                'product_id' => 4, 
                'gender_id' => 4, 
                'best_seller_img' => 'sweater4.avif',
            ],
            [
                'name' => 'Jacquard-Knit Cardigan', 
                'price' => 32000, 
                'category_id' => 3, 
                'product_id' => 5, 
                'gender_id' => 2, 
                'best_seller_img' => 'sweater5.avif',
            ],
        ];
        foreach($bestSeller as $best) {
            $imgPath = Storage::disk('public')->putFile('img/bestseller', new \Illuminate\Http\File(public_path('img/bestSeller/' . $best['best_seller_img'])));
            \App\Models\BestSeller::factory()->create([
                'name' => $best['name'],
                'price' => $best['price'],
                'category_id' => $best['category_id'],
                'gender_id' => $best['gender_id'],
                'product_id' => $best['product_id'],
                'best_seller_img' => $imgPath,
            ]);
        }
        $twoStyles = [
            [
                'title1' => 'Find your favourite',
                'title2' => 'Sportwears',
                'twostyles_img' => 'sport-poster.jpg',
            ],
            [
                'title1' => 'Find your favourite',
                'title2' => 'Streetstyles',
                'twostyles_img' => 'streetstyle-poster.webp',
            ],
        ];
        foreach($twoStyles as $style) {
            $imgPath = Storage::disk('public')->putFile('img/twoStyles', new \Illuminate\Http\File(public_path('img/bestSeller/' . $style['twostyles_img'])));
            \App\Models\TwoStyles::factory()->create([
                'title1' => $style['title1'],
                'title2' => $style['title2'],
                'twostyles_img' => $imgPath,
            ]);
        }
        $allProducts = [
            [
                'name' => 'Jacquard-Knit Turtleneck Sweater',
                'price' => 36000,
                'category_id' => 3,
                'bestseller_id' => 1,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'sweater1.avif',
            ],
            [
                'name' => 'Cable-Knit Sweater',
                'price' => 35000,
                'category_id' => 3,
                'bestseller_id' => 2,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sweater2.avif',
            ],
            [
                'name' => 'Cable-Knit Turtleneck Sweater',
                'price' => 34000,
                'category_id' => 3,
                'bestseller_id' => 3,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'sweater3.avif',
            ],
            [
                'name' => 'Rib-Knit Mock Turtleneck Sweater',
                'price' => 33000,
                'category_id' => 3,
                'bestseller_id' => 4,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'sweater4.avif',
            ],
            [
                'name' => 'Jacquard-Knit Cardigan',
                'price' => 18000,
                'category_id' => 3,
                'bestseller_id' => 5,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sweater5.avif',
            ],
            [
                'name' => 'Oversized Printed T-shirt',
                'price' => 20000,
                'category_id' => 2,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'tshirt.avif',
            ],
            [
                'name' => 'Oversized Motif-detail T-shirt',
                'price' => 20000,
                'category_id' => 2,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'tshirt1.avif',
            ],
            [
                'name' => 'Bow-Detail Strappy Dress',
                'price' => 40000,
                'category_id' => 1,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'dress.avif',
            ],
            [
                'name' => 'Fine-Knit Dress',
                'price' => 38000,
                'category_id' => 1,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 3,
                'product_img' => 'dress1.avif',
            ],
            [
                'name' => 'Cotton Jersey Pajamas',
                'price' => 18000,
                'category_id' => 5,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'nightwear1.avif',
            ],
            [
                'name' => 'Printed Cotton Pajamas',
                'price' => 18000,
                'category_id' => 5,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'nightwear.avif',
            ],
            [
                'name' => 'Integral-Bra Sports Tank Top',
                'price' => 35000,
                'category_id' => 4,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sportwear1.avif',
            ],
            [
                'name' => 'Cropped Sports Tank Top',
                'price' => 35000,
                'category_id' => 4,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sportwear.avif',
            ],
            [
                'name' => 'Sweat Pant',
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'pant.avif',
            ],
            [
                'name' => 'Paper-Bag Shorts',
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'pant1.avif',
            ],
            [
                'name' => 'Slim Fit Sports Joggers',
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 1,
                'product_img' => 'sportwear2.avif',
            ],
            [
                'name' => 'Regular Fit Sleeveless Sports Hoodie',
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 1,
                'product_img' => 'sportwear3.avif',
            ],
            [
                'name' => 'Sweat Dress',
                'price' => 18000,
                'category_id' => 3,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 3,
                'product_img' => 'kids.avif',
            ],
            [
                'name' => 'Porcelain Mug',
                'price' => 8000,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => NULL,
                'product_img' => 'acce.avif',
            ],
            [
                'name' => '2-pack Porcelain Espresso Cups',
                'price' => 7500,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => NULL,
                'product_img' => 'cups.avif',
            ],
            [
                'name' => 'Snowman Advent Calendar',
                'price' => 6500,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => NULL,
                'product_img' => 'calendar.avif',
            ],
        ];
        foreach($allProducts as $all) {
            $imgPath = Storage::disk('public')->putFile('img/products', new \Illuminate\Http\File(public_path('img/allProducts/' . $all['product_img'])));

            \App\Models\Product::factory()->create([
                'name' => $all['name'],
                'price' => $all['price'],
                'category_id' => $all['category_id'],
                'bestseller_id' => $all['bestseller_id'],
                'looks_id' => $all['looks_id'],
                'gender_id' => $all['gender_id'],
                'product_img' => $imgPath,
            ]);
        }
    }
}
