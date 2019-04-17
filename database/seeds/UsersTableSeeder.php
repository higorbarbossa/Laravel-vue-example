<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 999999000000,
            'name' => "Super Administrador",
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1
        ]);

        DB::table('users')->insert([
            'id' => 666,
            'name' => "Nario",
            'email' => 'nario@hue.com',
            'password' => bcrypt('123456'),
            'is_admin' => 1
        ]);
    }
}
