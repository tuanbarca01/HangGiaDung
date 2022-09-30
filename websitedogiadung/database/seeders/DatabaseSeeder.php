<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Loyal',
                'email' => 'Loyal@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Pham Tuan',
                'email' => 'phamtuan@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);


        DB::table('brands')->insert([
            [
                'name' => 'Calvin Klein',
            ],
            [
                'name' => 'Diesel',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tommy Hilfiger',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Bedroom', //1
            ],
            [
                'name' => 'Diningroom', //2
            ],
            [
                'name' => 'Kichen', //3
            ],
        ]);

        DB::table('product')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Bộ bát đĩa',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'featured' => true,
                'tag' => 'Bowl',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Bộ tách trà 1',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'featured' => true,
                'tag' => 'Cup',
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Bộ tách trà 2',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'Cup',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Nệm Cao Su',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'featured' => true,
                'tag' => 'Mattress',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Bộ nồi 1",
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'featured' => false,
                'tag' => 'Pot',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Bộ muỗng 1',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'Spoon',
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Mền loại 1',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'featured' => true,
                'tag' => 'Blanket',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Mền loại 2',
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'featured' => true,
                'tag' => 'Blanket',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Bộ gối nằm',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'pillow',
            ],
			[
                'id' => 10,
                'brand_id' => 2,
                'product_category_id' => 1,
                'name' => 'Bộ gối ôm',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'pillow',
            ],
			[
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'Lò nướng',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => false,
                'tag' => 'Oven',
            ],
            [
			    'id' => 12,
                'brand_id' => 2,
                'product_category_id' => 3,
                'name' => 'Vỉ nướng',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'Oven',
			],
			[
                'id' => 13,
                'brand_id' => 3,
                'product_category_id' => 1,
                'name' => 'Nệm hơi',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'featured' => false,
                'tag' => 'Mattress',
            ],
            [
                'id' => 14,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Bộ muỗng 2',
                'description' => null,
                'content' => null,
                'price' => 25,
                'qty' => 20,
                'discount' => 34,
                'featured' => true,
                'tag' => 'Spoon',
            ],
            [
                'id' => 15,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Bộ chén',
                'description' => 'bộ chén đĩa vì sức khỏe',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'featured' => true,
                'tag' => 'Bowl',
            ],
        ]);

        DB::table('product_image')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
			[
				'product_id' => 10,
                'path' => 'product-10.jpg',
            ],
			[
				'product_id' => 11,
                'path' => 'product-11.jpg',
            ],
			[
				'product_id' => 12,
                'path' => 'product-12.jpg',
            ],
			[
				'product_id' => 13,
                'path' => 'product-13.jpg',
            ],
			[
				'product_id' => 14,
                'path' => 'product-14.jpg',
            ],
			[
				'product_id' => 15,
                'path' => 'product-15.jpg',
            ],
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'blue',
                'size' => 'S',
                'qty' => 5,
            ],
            [
                'product_id' => 2,
                'color' => 'blue',
                'size' => 'M',
                'qty' => 5,
            ],
            [
                'product_id' => 3,
                'color' => 'blue',
                'size' => 'L',
                'qty' => 5,
            ],
            [
                'product_id' => 4,
                'color' => 'blue',
                'size' => 'XS',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'color' => 'yellow',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 6,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 7,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 8,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 9,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 10,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 11,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 12,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 13,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 14,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
            [
                'product_id' => 15,
                'color' => 'violet',
                'size' => 'S',
                'qty' => 0,
            ],
        ]);
    }
}

