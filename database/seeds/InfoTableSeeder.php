<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            'address_ru' => '225612, Республика Беларусь, г.Дрогичин, ул.Ленина 202',
            'address_en' => '225612, Republic of Belarus, Drogichin Lenin 202 street',
            'phone1' => '8 01644 <strong>3-24-09</strong>',
            'phone2' => '8 01644 <strong>3-24-09</strong>',
            'mail' => 'bm@ekzon.by',
            'copyright_ru' => '© 2017 ОАО ЭКЗОН Все права защищены',
            'copyright_en' => '© 2017 Exon All rights reserve'
        ]);
    }
}
