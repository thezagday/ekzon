<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatalogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catalogs')->insert([
            'title_ru' => 'Лекарственные средства',
            'title_en' => 'Medicines',
            'parent' => 0
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Биологически активные добавки',
            'title_en' => 'Biologically active additives',
            'parent' => 0
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Пищевые продукты',
            'title_en' => 'Foodstuffs',
            'parent' => 0
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Сиропы',
            'title_en' => 'Syrups',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Гематогены',
            'title_en' => 'Hematogen',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Таблетки',
            'title_en' => 'Tablets',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Порошки и гранулы',
            'title_en' => 'Powders',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Капсулы',
            'title_en' => 'Capsules',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Прочие лекарственные средства',
            'title_en' => 'Other medicines',
            'parent' => 1
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Порошки и гранулы',
            'title_en' => 'Powders',
            'parent' => 2
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Капсулы',
            'title_en' => 'Capsules',
            'parent' => 2
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Прочие лекарственные средства',
            'title_en' => 'Other medicines',
            'parent' => 2
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Капсулы',
            'title_en' => 'Capsules',
            'parent' => 3
        ]);
        DB::table('catalogs')->insert([
            'title_ru' => 'Прочие лекарственные средства',
            'title_en' => 'Other medicines',
            'parent' => 3
        ]);
    }
}
