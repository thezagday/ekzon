<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 1
        ]);
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 1
        ]);
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 2
        ]);
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 2
        ]);
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 3
        ]);
        DB::table('news_sliders')->insert([
            'img' => 'images/news_slider/img1.png',
            'parent' => 3
        ]);
    }
}
