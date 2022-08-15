<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Panasonic tv',
                'price' => '1000',
                'description' => 'Samsung TV with a lot of features',
                'category' => 'tv',
                'gallery' => 'https://www.w3schools.com/bootstrap/la.jpg'
            ],
            [
                'name' => 'Sony tv',
                'price' => '1200',
                'description' => 'Sony TV with a lot of features',
                'category' => 'mobile',
                'gallery' => 'https://www.w3schools.com/bootstrap/chicago.jpg'
            ],
            [
                'name' => 'Samsung Fridge',
                'price' => '2200',
                'description' => 'Samsung fridge with a lot of features',
                'category' => 'mobile',
                'gallery' => 'https://www.w3schools.com/bootstrap/ny.jpg'
            ],
        ]);
    }
}
