<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title_ru' => 'Сироп "Розавит"',
            'title_en' => 'Syrup "Rosavit"',
            'reg_ru' => 'РЕГ. № 11/03/387',
            'reg_en' => 'REG. № 11/03/387',
            'name_ru' => 'Сироп "Розавит"',
            'name_en' => 'Syrup "Rosavit"',
            'inter_name' => 'Rosavit',
            'short_desc_ru' => 'Средство, регулирующее метаболические процессы',
            'short_desc_en' => 'Means that regulate metabolic processes',
            'appointment_ru' => 'Профилактические',
            'appointment_en' => 'Prophylactic',
            'volume' => 250,
            'recipe' => 0,
            'desc_ru' => 'Состав 250 мл: 
                        Экстракт шиповника и рябины жидкий водный (1:1) - 90,710 г
                        Аскорбиновая кислота - 0,816 г
                        Вспомогательные вещества:
                        Сахар-песок, лимонная кислота, вода очищенная.
                        
                        Фармакологическая группа.
                        Аскорбиновая кислота (витамин С) в комбинации. A11GB.
                        
                        Фармакологическое действие.
                        Лекарственное средство способствует повышению неспецифической резистентности организма, усилению регенерации тканей, уменьшению проницаемости сосудов, нормализации углеводного обмена. Фармакологические свойства лекарственного средства обусловлены наличием кислоты аскорбиновой и других веществ (каротиноидов, флавоноидов, органических кислот и др.), входящих в его состав.
                        
                        Показания к применению. Применяется для профилактики гиповитаминоза и авитаминоза витамина С, в комплексной терапии астенических состояний, в период выздоровления после инфекционных и простудных заболеваний.
                        
                        Противопоказания. Повышенная чувствительность к компонентам лекарственного средства, детский возраст до 3-х лет.
                        
                        Способ применения и дозы. 
                        Розавит назначают внутрь, детям старше 3 лет от 1 чайной ложки до 1 десертной ложки в зависимости от возраста, взрослым по 2-3 десертные ложки 3 раза в день после еды.
                        
                        Побочное действие. 
                        Возможны аллергические реакции на компоненты лекарственного средства.
                        Особые указания. С осторожностью применять при заболеваниях сахарным диабетом.
                        
                        Передозировка. 
                        Не выявлена.
                        
                        Взаимодействие с другими лекарственными средствами. 
                        При одновременном применении лекарственного средства и витаминов В1, В2, Вс и Р (рутина) определяется взаимное усиление терапевтического действия. Витамин С улучшает усвоение железа, повышает концентрацию салицилатов, антибиотиков, снижает эффект гормональных контрацептивов, антикоагулярный эффект производных кумарина.
                        
                        Условия хранения.
                        В сухом, защищенном от света, недоступном для детей месте при температуре не выше 25 оС.
                        
                        Срок годности.
                        12 месяцев. Использовать в течение 10 суток после открытия бутылки. Не использовать позже срока, указанного на упаковке.',
            'desc_en' => 'The composition of the 250 ml: 
                            Extract of rose hips and Rowan liquid water (1:1) - 90,710 g
                            Ascorbic acid - 0,816 g
                            Excipients:
                            Sugar, citric acid, purified water.
                            
                            Pharmacological group.
                            Ascorbic acid (vitamin C) in combination. A11GB.
                            
                            Pharmacological action.
                             The drug enhances nonspecific resistance of the organism, strengthening of tissue regeneration, reduction of vascular permeability, normalization of carbohydrate metabolism. The pharmacological properties of the drug due to the presence of ascorbic acid and other substances (carotenoids, flavonoids, organic acids, etc.), included in its composition.
                            
                             Indications. It is used to prevent hypovitaminosis and avitaminosis of vitamin C in the complex therapy of asthenic conditions during convalescence after infections and colds.
                            
                            Contraindications. Hypersensitivity to the drug, child age up to 3 years.
                            
                            Method of application and doses. 
                             Rosavit administered orally for children older than 3 years from 1 teaspoon to 1 dessert spoon, depending on age, for adults: 2-3 dessert spoons 3 times a day after meals.
                            
                            Side effects. 
                            Possible allergic reactions to components of the drug.
                            Special instructions. To apply caution in diseases with diabetes.
                            
                            Overdose. 
                            It is not revealed.
                            
                             Interaction with other medicinal products. 
                            While the use of medicines and vitamins B1, B2, BC and P (rutin) is a mutual enhancement of the therapeutic effect. Vitamin C improves iron absorption, increases the concentration of salicylates, antibiotics, reduces the effect of hormonal contraceptives, anticoagulant effect of coumarin derivatives.
                            
                            The storage conditions.
                             In a dry, dark, inaccessible to children place at temperature not exceeding 25 OC.
                            
                            The expiration date.
                            12 months. Use within 10 days after opening the bottle. Do not use after date shown on packaging.',
            'img' => 'images/products/catalog__card-img1.png',
            'isNew' => 1,
            'category' => 4,
        ]);
    }
}
