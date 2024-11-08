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
        $genders = ['Men', 'Women', 'Kids', 'Unisex', 'Accessories'];
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
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 36000,
                'category_id' => 3,
                'bestseller_id' => 1,
                'home_id' => NULL,
                'looks_id' => 3,
                'gender_id' => 4,
                'product_img' => 'sweater1.avif',
            ],
            [
                'name' => 'Cable-Knit Sweater',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 3,
                'bestseller_id' => 2,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sweater2.avif',
            ],
            [
                'name' => 'Cable-Knit Turtleneck Sweater',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 34000,
                'category_id' => 3,
                'bestseller_id' => 3,
                'looks_id' => 4,
                'home_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'sweater3.avif',
            ],
            [
                'name' => 'Rib-Knit Mock Turtleneck Sweater',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 33000,
                'category_id' => 3,
                'bestseller_id' => 4,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'sweater4.avif',
            ],
            [
                'name' => 'Jacquard-Knit Cardigan',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 18000,
                'category_id' => 3,
                'bestseller_id' => 5,
                'looks_id' => 2,
                'home_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sweater5.avif',
            ],
            [
                'name' => 'Oversized Printed T-shirt',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 20000,
                'category_id' => 2,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'tshirt.avif',
            ],
            [
                'name' => 'Sweater',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 23000,
                'category_id' => 3,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => 1,
                'gender_id' => 2,
                'product_img' => 'cts-3.avif',
            ],
            [
                'name' => 'Oversized Motif-detail T-shirt',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 20000,
                'category_id' => 2,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'tshirt1.avif',
            ],
            [
                'name' => 'Bow-Detail Strappy Dress',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 40000,
                'category_id' => 1,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'dress.avif',
            ],
            [
                'name' => 'Classical Floral Dress',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 38000,
                'category_id' => 1,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'cute_dress.png',
            ],
            [
                'name' => 'Fine-Knit Dress',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 38000,
                'category_id' => 1,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 3,
                'product_img' => 'dress1.avif',
            ],
            [
                'name' => 'Cotton Jersey Pajamas',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 18000,
                'category_id' => 5,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'nightwear1.avif',
            ],
            [
                'name' => 'Printed Cotton Pajamas',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 18000,
                'category_id' => 5,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'nightwear.avif',
            ],
            [
                'name' => 'Integral-Bra Sports Tank Top',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 4,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sportwear1.avif',
            ],
            [
                'name' => 'Cropped Sports Tank Top',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 4,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'sportwear.avif',
            ],
            [
                'name' => 'Sweat Pant',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 2,
                'product_img' => 'pant.avif',
            ],
            [
                'name' => 'Paper-Bag Shorts',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 1,
                'product_img' => 'pant1.avif',
            ],
            [
                'name' => 'Slim Fit Sports Joggers',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 6,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'home_id' => NULL,
                'gender_id' => 1,
                'product_img' => 'sportwear2.avif',
            ],
            [
                'name' => 'Regular Fit Sleeveless Sports Hoodie',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 35000,
                'category_id' => 4,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 1,
                'product_img' => 'sportwear3.avif',
            ],
            [
                'name' => 'Sweat Dress',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 18000,
                'category_id' => 3,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 3,
                'product_img' => 'kids.avif',
            ],
            [
                'name' => 'Porcelain Mug',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 8000,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 5,
                'product_img' => 'acce.avif',
            ],
            [
                'name' => '2-pack Porcelain Espresso Cups',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 7500,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'home_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 5,
                'product_img' => 'cups.avif',
            ],
            [
                'name' => 'Snowman Advent Calendar',
                'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 6500,
                'category_id' => NULL,
                'home_id' => NULL,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'gender_id' => 5,
                'product_img' => 'calendar.avif',
            ],
            [
                'name' => 'Oversized Cotton Hoodie',
                'description' => 'Embrace warmth and style with our luxurious, ultra-soft white puffer jacket, perfect for cold-weather adventures. Designed to keep you cozy without sacrificing elegance, this cropped jacket features a high collar and plush, insulated fabric for optimal comfort. Complete with matching fluffy earmuffs, it\'s the ideal outfit for snowy escapes or brisk winter mornings. Whether you\'re hitting the slopes or strolling through town, this chic winter set will ensure you stay warm and fashion-forward. Pair it with your favorite high-waisted leggings for a sleek and modern look.',
                'size' => ['S' , 'M' , 'L'],
                'price' => 45000,
                'category_id' => 3,
                'bestseller_id' => NULL,
                'looks_id' => NULL,
                'home_id' => 2,
                'gender_id' => 2,
                'product_img' => 'home-item1.avif',
            ],
            [
                'name' => 'Recovery Slipper',
                'description' => 'Get ready to step into recovery mode. Meet the newest addition to the recovery lineup—the Recovery Slipper. With its cloud-like sole and extra cozy exterior, every step you take will feel ultra-soft. Wear it from a workout session to a coffee date with ease.',
                'size' => ['35-36' , '37-38' , '39-40', '40-41', '41-42', '42-43'],
                'price' => 25000,
                'category_id' => NULL,
                'bestseller_id' => NULL,
                'home_id' => 1,
                'looks_id' => NULL,
                'gender_id' => 4,
                'product_img' => 'alo-shoe.png',
            ],
        ];
        foreach($allProducts as $all) {
            $imgPath = Storage::disk('public')->putFile('img/products', new \Illuminate\Http\File(public_path('img/allProducts/' . $all['product_img'])));
            \App\Models\Product::factory()->create([
                'name' => $all['name'],
                'description' => $all['description'],
                'size' => json_encode($all['size']),
                'price' => $all['price'],
                'category_id' => $all['category_id'],
                'bestseller_id' => $all['bestseller_id'],
                'looks_id' => $all['looks_id'],
                'home_id' => $all['home_id'],
                'gender_id' => $all['gender_id'],
                'product_img' => $imgPath,
            ]);
        }
        $looks = [
            ['looks_img' => 'cts.avif', 'model_name' => '@brighter', 'product_id' => 7],
            ['looks_img' => 'cts1.avif', 'model_name' => '@nova', 'product_id' => 5],
            ['looks_img' => 'cts2.avif', 'model_name' => '@sonia', 'product_id' => 1],
            ['looks_img' => 'cts3.avif', 'model_name' => '@elle', 'product_id' => 3],
        ];
        foreach($looks as $look) {
            $imgPath = Storage::disk('public')->putFile('img/looks', new \Illuminate\Http\File(public_path('img/allProducts/' . $look['looks_img'])));
            \App\Models\Looks::factory()->create([
                'model_name' => $look['model_name'],
                'product_id' => $look['product_id'],
                'looks_img' => $imgPath,
            ]);
        }
        $home = [
            [
                'name' => "Recovery Slipper",
                'price' => 25000,
                'product_id' => 25,
                'bac_img' => "home2.webp",
                'img' => "alo-shoe1.webp",
            ],
            [
                'name' => "Oversized Cotton Hoodie",
                'price' => 45000,
                'product_id' => 24,
                'bac_img' => "home1.avif",
                'img' => "home-item1.avif",
            ],
        ];
        foreach($home as $home) {
            $bacImg = Storage::disk('public')->putFile('img/home', new \Illuminate\Http\File(public_path('img/allProducts/' . $home['bac_img'])));
            $img = Storage::disk('public')->putFile('img/home', new \Illuminate\Http\File(public_path('img/allProducts/' . $home['img'])));
            \App\Models\Home::factory()->create([
                'name' => $home['name'],
                'price' => $home['price'],
                'product_id' => $home['product_id'],
                'bac_img' => $bacImg,
                'img' => $img,
            ]);
        }
    }
}
