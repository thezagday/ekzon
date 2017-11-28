<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyMaterialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_materials')->insert([

            'text_ru' => 'В эпоху технического прогресса и рыночных отношений, здоровье – это наш капитал, мы можем его растратить,
                          а можем приумножить. Будучи больным, трудно воплотить в жизнь свои мечты, полностью реализоваться в 
                          современном мире. Забота о Вашем здоровье – миссия существования ОАО «ЭКЗОН» вот уже 20 лет. На 
                          фармацевтическом рынке Беларуси ОАО «ЭКЗОН» занимает значительную долю, осуществляя производство более 100
                          наименований лекарственных средств и биологически активных добавок. Нашими постоянными партнёрами на 
                          сегодняшний день являются более 60 предприятий оптовой и розничной торговли по всей Беларуси.
                          Движение вперед, постоянное расширение и модернизация производства при сохранении высокого качества 
                          продукции, увеличение охвата географии сотрудничества – неизменные принципы деятельности нашего предприятия. 
                          Плодотворное международное партнёрство осуществляется со многими странами: Россия, Украина, Молдова, Грузия, 
                          Казахстан, Литва, Латвия, Германия, США, Польша.',

            'text_en' => 'In the era of technological progress and market relations, health is our capital, we can squander it, but we 
                          can multiply. Being sick, it is difficult to realize your dreams, to be fully realized in the modern world. 
                          Care for your health is the mission of the existence of JSC "EKZON" for 20 years. On the pharmaceutical market 
                          of Belarus, JSC "EKZON" occupies a significant share, carrying out the production of more than 100 names of 
                          medicines and biologically active additives. Our constant partners today are more than 60 wholesale and retail 
                          trade enterprises throughout Belarus. Forward movement,continuous expansion and modernization of production while maintaining high quality
                          products, increasing coverage of the geography of cooperation - the unchanging principles of our company\'s activities.
                          Fruitful international partnership is carried out with many countries: Russia, Ukraine, Moldova, Georgia,
                          Kazakhstan, Lithuania, Latvia, Germany, the USA, Poland.',

            'img' => 'images/company/about-company__text-image.png',
        ]);
    }
}
