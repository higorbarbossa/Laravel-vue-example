<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'id' => 1,
            'name' => "Laravel",
            'description' => 'The PHP Framework For Web Artisans',
        ]);

        DB::table('brands')->insert([
            'id' => 2,
            'name' => "Vue.js",
            'description' => 'The Progressive JavaScript Framework',
        ]);

    }
}
