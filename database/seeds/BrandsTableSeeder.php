<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'title' => 'Магнит',
            'img' => 'images/brands/about-company__partners1.png',
        ]);
        DB::table('brands')->insert([
            'title' => 'Шатура',
            'img' => 'images/brands/about-company__partners2.png',
        ]);
        DB::table('brands')->insert([
            'title' => 'Триал Спорт',
            'img' => 'images/brands/about-company__partners3.png',
        ]);
        DB::table('brands')->insert([
            'title' => 'Факультет',
            'img' => 'images/brands/about-company__partners4.png',
        ]);
        DB::table('brands')->insert([
            'title' => 'Тануки',
            'img' => 'images/brands/about-company__partners5.png',
        ]);




    }
}
