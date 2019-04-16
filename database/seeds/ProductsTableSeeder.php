<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => "Quasar",
            'description' => 'High Performance Full Frontend Stack',
            'pathToImage' => 'https://cdn-images-1.medium.com/max/800/1*xjpFWCxnaa3FSUHlvQGZvA.png',
            'brand_id' => 2,
        ]);

        DB::table('products')->insert([
            'name' => "Lumen",
            'description' => 'The stunningly fast micro-framework by Laravel.',
            'pathToImage' => 'https://vuejs.org/images/logo.png',
            'brand_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => "Lumen",
            'description' => 'The stunningly fast micro-framework by Laravel.',
            'pathToImage' => 'https://vuejs.org/images/logo.png',
            'brand_id' => 1,
        ]);
        DB::table('products')->insert([
            'name' => "Lumen",
            'description' => 'The stunningly fast micro-framework by Laravel.',
            'pathToImage' => 'https://vuejs.org/images/logo.png',
            'brand_id' => 1,
        ]);
    }
}
