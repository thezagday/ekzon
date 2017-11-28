<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'title_ru' => 'Каталог продукции',
            'title_en' => 'Products catalog',
            'link' => '/catalog',
            'position' => 0
        ]);
        DB::table('menus')->insert([
            'title_ru' => 'О компании',
            'title_en' => 'Company',
            'link' => '/company',
            'position' => 0
        ]);
        DB::table('menus')->insert([
            'title_ru' => 'Новости',
            'title_en' => 'News',
            'link' => '/news',
            'position' => 0
        ]);
        DB::table('menus')->insert([
            'title_ru' => 'Партнерам',
            'title_en' => 'Partners',
            'link' => '/partners',
            'position' => 1
        ]);
        DB::table('menus')->insert([
            'title_ru' => 'Контакты',
            'title_en' => 'Contacts',
            'link' => '/contacts',
            'position' => 1
        ]);
    }
}
