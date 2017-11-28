<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainMaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_materials')->insert([
            'title_ru' => 'Лекарственные препараты и пищевые добавки',
            'title_en' => 'Medicinal products and food additives',
            'text_first_ru' => 'Производство продукции осуществляется на основании промышленных регламентов, технологических инструкций, стандартных операционных процедур (СОП). На предприятии действует собственная служба обеспечения и контроля качества. Высококвалифицированный персонал выполняет работы по входному промежуточному контролю, а также контроль качества готовой продукции, контролирует хранение и реализацию. Процесс производства, обеспечения и контроль качества продукции ОАО "Экзон" гарантирует безопасность продукции, эффективность и полное соответствие техническим нормативным правовым актам и нормативным документам.',
            'text_first_en' => 'Production is carried out on the basis of industrial regulations, technological instructions, standard operating procedures (SOP). The company has its own service of quality assurance and control. Highly qualified personnel perform work on incoming intermediate control, as well as quality control of finished products, controls storage and sale. The process of production, supply and quality control of JSC "Exon" guarantees product safety, efficiency and full compliance with technical regulatory legal acts and regulatory documents.In detail',
            'text_second_ru' => 'Производство продукции осуществляется на основании промышленных регламентов, технологических инструкций, стандартных операционных процедур (СОП). На предприятии действует собственная служба обеспечения и контроля качества. Высококвалифицированный персонал выполняет работы по входному промежуточному контролю, а также контроль качества готовой продукции, контролирует хранение и реализацию. Процесс производства, обеспечения и контроль качества продукции ОАО "Экзон" гарантирует безопасность продукции, эффективность и полное соответствие техническим нормативным правовым актам и нормативным документам.',
            'text_second_en' => 'Production is carried out on the basis of industrial regulations, technological instructions, standard operating procedures (SOP). The company has its own service of quality assurance and control. Highly qualified personnel perform work on incoming intermediate control, as well as quality control of finished products, controls storage and sale. The process of production, supply and quality control of JSC "Exon" guarantees product safety, efficiency and full compliance with technical regulatory legal acts and regulatory documents.In detail',
        ]);
    }
}
