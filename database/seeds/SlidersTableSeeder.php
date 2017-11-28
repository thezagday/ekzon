<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'img' => 'images/slider/main-page-slider__img.png',
            'title_ru' => 'Качество 1',
            'title_en' => 'Quality 1',
            'content_ru' => 'Производство лекарственных средств соответствует стандарту GMP1',
            'content_en' => 'The production of medicinal products complies with the GMP standard1'
        ]);
        DB::table('sliders')->insert([
            'img' => 'images/slider/main-page-slider__img.png',
            'title_ru' => 'Качество 2',
            'title_en' => 'Quality 2',
            'content_ru' => 'Производство лекарственных средств соответствует стандарту GMP2',
            'content_en' => 'The production of medicinal products complies with the GMP standard2'
        ]);
        DB::table('sliders')->insert([
            'img' => 'images/slider/main-page-slider__img.png',
            'title_ru' => 'Качество 3',
            'title_en' => 'Quality 3',
            'content_ru' => 'Производство лекарственных средств соответствует стандарту GMP3',
            'content_en' => 'The production of medicinal products complies with the GMP standard3'
        ]);
    }
}
