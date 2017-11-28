<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'firm_ru' => 'ОАО "ЭКЗОН"',
            'firm_en' => 'OJSC "EKZON"',

            'field_address_ru' => 'Адрес',
            'field_address_en' => 'Address',
            'address_ru' => '225612, Республика Беларусь, Брестская обл., г.Дрогичин ул.Ленина 202',
            'address_en' => '225612, Republic of Belarus, Brest region, Drogichin, Lenin street 202',

            'field_reception_ru' => 'Приемная',
            'field_reception_en' => 'Reception',
            'reception_ru' => '<strong>3-07-29</strong><br/>код города для звонков из Республики Беларусь (01644)<br/>код страны и города для звонков из зарубежа (103751644)',
            'reception_en' => '<strong>3-07-29</strong><br/>city ​​code for calls from the Republic of Belarus (01644)<br/>country and city code for calls from abroad (103751644)',

            'field_email' => 'E-mail',
            'email_ru' => '<strong>director@ekzon.by - </strong>Приемная руководителя<br/><strong>bm@ekzon.by - </strong>Отдел продаж<br/><strong>reklama@ekzon.by - </strong>Бюро маркетинга<br/><strong>os@ekzon.by - </strong>Отдел материально-технического снабжения<br/><strong>pto@ekzon.by - </strong>Производственно-технический отдел	',
            'email_en' => '<strong>director@ekzon.by - </strong>Admissions Officer<br/><strong>bm@ekzon.by - </strong>Sales department<br/><strong>reklama@ekzon.by - </strong>Marketing Office<br/><strong>os@ekzon.by - </strong>Department of Material and Technical Supply<br/><strong>pto@ekzon.by - </strong>Production and technical department',

            'field_requisites_ru' => 'Реквизиты',
            'field_requisites_en' => 'Requisites',
            'requisites_ru' => '<strong>Открытое акционерное общество "Экзон"<br/>УНП:200433278<br/>р/с 3012105610015 в ЦБУ №108 филиала №802 ОАО «АСБ Беларусбанк» в г. Дрогичине,<br/>код банка 150501245</strong>',
            'requisites_en' => '<strong>Open Joint Stock Company "Exon"<br/>UND: 200433278<br/>r / s 3012105610015 in the Central Bank of the Russian Federation # 108 of the branch # 802 of JSC "ASB Belarusbank" in Drogichin,<br/>bank code 150501245</strong>',

            'field_work_ru' => 'Режим работы',
            'field_work_en' => 'Operating mode',
            'work_ru' => '<strong>пн-пт 8:00 - 17:00 </strong>',
            'work_en' => '<strong>mn-fr 8 am - 5 pm </strong>',

            'field_leadership_ru' => 'Руководство',
            'field_leadership_en' => 'Management',
            'leadership_ru' => '<strong>Директор</strong>',
            'leadership_en' => '<strong>Director</strong>',
            'name_lead_ru' => 'Васкевич Валерий Федорович<br/>Приемная:',
            'name_lead_en' => 'Vaskevich Valery Fedorovich <br/> Reception:',
            'phone_lead_ru' => '(016 44) 3-07-29 (приемная)',
            'phone_lead_en' => '(016 44) 3-07-29 (reception)',
            'mail_lead' => 'director@ekzon.by',

            'vice_leadership_ru' => '<strong>Зам. директор по коммерческим вопросам</strong>',
            'vice_leadership_en' => '<strong>Deputy. Director of Commercial Affairs</strong>',
            'name_vice_lead_ru' => 'Митрофанов Игорь Александрович',
            'name_vice_lead_en' => 'Mitrofanov Igor Alexandrovich',
            'vice_phone' => '(016 44) 3-25-43',
            'vice_mail' => 'zamdirector@ekzon.by',

            'field_marketing_ru' => 'Бюро маркетинга',
            'field_marketing_en' => 'Marketing Office',
            'marketing_ru' => '<strong>Начальник бюро</strong>',
            'marketing_en' => '<strong>Head Office</strong>',
            'name_marketing_ru' => 'Репич Антон Дмитриевич',
            'name_marketing_en' => 'Repich Anton Dmitrievich',
            'phone_marketing' => '(01644) 3-24-09',
            'mail_marketing' => 'reklama@ekzon.by',

            'field_tech_dep_ru' => 'Производственно-технологический отдел',
            'field_tech_dep_en' => 'Production and technological department',
            'head_dep_ru' => '<strong>Начальник отдела</strong>',
            'head_dep_en' => '<strong>Head of Department</strong>',
            'name_head_dep_ru' => 'Максимчук Елена Ивановна',
            'name_head_dep_en' => 'Maximchuk Elena Ivanovna',
            'phone_head_dep' => '(01644) 3-65-68',
            'mail_head_dep' => 'pto@ekzon.by',

            'field_control_ru' => 'Управление обеспечения и контроля качества',
            'field_control_en' => 'Quality Assurance and Quality Management',
            'head_con_ru' => '<strong>Начальник отдела</strong>',
            'head_con_en' => '<strong>Head of Department</strong>',
            'name_head_con_ru' => 'Рудая Наталья Викторовна',
            'name_head_con_en' => 'Rudaya Natalya Viktorovna',
            'phone_con' => '(01644) 3-03-42',

            'field_bookkeeping_ru' => 'Бухгалтерия',
            'field_bookkeeping_en' => 'Bookkeeping',
            'head_bk_ru' => '<strong>Главный бухгалтер</strong>',
            'head_bk_en' => '<strong>Chief Accountant</strong>',
            'name_head_bk_ru' => 'Горностай Светлана Назимджановна',
            'name_head_bk_en' => 'Gennostay Svetlana Nazimjanovna',
            'phone_bk' => '(01644) 3-02-43',

            'field_sales_ru' => 'Отдел продаж',
            'field_sales_en' => 'Sales department',
            'head_sales_ru' => '<strong>Начальник отдела</strong>',
            'head_sales_en' => '<strong>Head of Department</strong>',
            'name_head_sales_ru' => 'Малюга Павел Владимирович<br/>Приемная:',
            'name_head_sales_en' => 'Malyuga Pavel Vladimirovich <br/> Reception:',
            'phone_sales' => '(01644) 3-25-01',

            'lead_spec_ru' => '<strong>Ведущий специалист по продаже </strong>(экспорт)',
            'lead_spec_en' => '<strong> Leading Sales Specialist </strong> (export)',
            'name_lead_spec_ru' => 'Ярошевич Иван Александрович',
            'name_lead_spec_en' => 'Yaroshevich Ivan Aleksandrovich',
            'phone_lead_spec' => '(01644) 3-07-37',

            'spec_bad_ru' => '<strong>Специалисты по продаже ЛС и БАД</strong>',
            'spec_bad_en' => '<strong> Specialists selling drugs and dietary supplements </strong>',
            'fax_bad_ru' => '(01644) 3-02-29 (тел./факс)',
            'fax_bad_en' => '(01644) 3-02-29 (ph./fax)',
            'phone_bad' => '(01644) 3-17-84',
            'mail_bad' => 'bm@ekzon.by',

            'field_sup_ru' => 'Отдел материально-технического снабжения',
            'field_sup_en' => 'Department of Material and Technical Supply',
            'head_sup_ru' => '<strong>Начальник отдела</strong>',
            'head_sup_en' => '<strong> Head of department </strong>',
            'name_sup_ru' => 'Ваврушевич Анна Николаевна',
            'name_sup_en' => 'Vavrushevich Anna Nikolaevna',
            'phone_sup_ru' => '(01644) 3-23-56 (тел./факс)',
            'phone_sup_en' => '(01644) 3-23-56 (ph./fax)',
            'mail_sup' => 'os@ekzon.by',
            
        ]);

    }
}
