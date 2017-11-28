<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProducedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produceds')->insert([
            'title_ru' => 'Плиток гематогена',
            'title_en' => 'Tile of hematogen',
            'number' => '25 185 798',
            'img' => 'images/company/about-company__production-candy.png'
        ]);
        DB::table('produceds')->insert([
            'title_ru' => 'Упаковок таблеток',
            'title_en' => 'Packing of tablets',
            'number' => '6 927 004',
            'img' => 'images/company/about-company__production-pills.png'
        ]);
        DB::table('produceds')->insert([
            'title_ru' => 'Флаконов сиропов',
            'title_en' => 'Vials of syrups',
            'number' => '1 202 073',
            'img' => 'images/company/about-company__production-bottle.png'
        ]);
        DB::table('produceds')->insert([
            'title_ru' => 'Упаковок порошков и гранул',
            'title_en' => 'Packaging of powders and granules',
            'number' => '1 129 027',
            'img' => 'images/company/about-company__production-drugs.png'
        ]);
        DB::table('produceds')->insert([
            'title_ru' => 'Упаковок аэрозолей',
            'title_en' => 'Aerosol packages',
            'number' => '111 418',
            'img' => 'images/company/about-company__production-eye-drops.png'
        ]);
    }
}
