<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('page_materials')->insert([
            'img' => 'images/materials/news-all__title.png',
            'title_ru' => 'Каталог продукции',
            'title_en' => 'Products catalog',
            'link' => '/catalog',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/about-company__title.png',
            'title_ru' => 'О компании',
            'title_en' => 'Company',
            'link' => '/company',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/news-all__title.png',
            'title_ru' => 'Новости',
            'title_en' => 'News',
            'link' => '/news',
        ]);
        DB::table('page_materials')->insert([
            'img' => '',
            'title_ru' => 'Партнеры',
            'title_en' => 'Partners',
            'link' => '/partners',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/contacts-title.png',
            'title_ru' => 'Контакты',
            'title_en' => 'Contacts',
            'link' => '/contacts',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/lk__title.png',
            'title_ru' => 'Фармаконадзор',
            'title_en' => 'pharmacovigilance',
            'link' => '/pharma',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/lk__title.png',
            'title_ru' => 'Личный кабинет клиента',
            'title_en' => 'Products catalog',
            'link' => '/home',
        ]);
        DB::table('page_materials')->insert([
            'img' => 'images/materials/catalog-card__title.png',
            'title_ru' => 'Каталог продукции',
            'title_en' => 'Products catalog',
            'link' => '/products',
        ]);
    }
}
