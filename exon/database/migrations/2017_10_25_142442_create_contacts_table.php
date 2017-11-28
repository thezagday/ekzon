<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->text('firm_ru')->nullable();
            $table->text('firm_en')->nullable();

            $table->text('field_address_ru')->nullable();
            $table->text('field_address_en')->nullable();
            $table->text('address_ru')->nullable();
            $table->text('address_en')->nullable();

            $table->text('field_reception_ru')->nullable();
            $table->text('field_reception_en')->nullable();
            $table->text('reception_ru')->nullable();
            $table->text('reception_en')->nullable();

            $table->text('field_email')->nullable();
            $table->text('email_ru')->nullable();
            $table->text('email_en')->nullable();

            $table->text('field_requisites_ru')->nullable();
            $table->text('field_requisites_en')->nullable();
            $table->text('requisites_ru')->nullable();
            $table->text('requisites_en')->nullable();

            $table->text('field_work_ru')->nullable();
            $table->text('field_work_en')->nullable();
            $table->text('work_ru')->nullable();
            $table->text('work_en')->nullable();

            $table->text('field_leadership_ru')->nullable();
            $table->text('field_leadership_en')->nullable();
            $table->text('leadership_ru')->nullable();
            $table->text('leadership_en')->nullable();
            $table->text('name_lead_ru')->nullable();
            $table->text('name_lead_en')->nullable();
            $table->text('phone_lead_ru')->nullable();
            $table->text('phone_lead_en')->nullable();
            $table->text('mail_lead')->nullable();

            $table->text('vice_leadership_ru')->nullable();
            $table->text('vice_leadership_en')->nullable();
            $table->text('name_vice_lead_ru')->nullable();
            $table->text('name_vice_lead_en')->nullable();
            $table->text('vice_phone')->nullable();
            $table->text('vice_mail')->nullable();

            $table->text('field_marketing_ru')->nullable();
            $table->text('field_marketing_en')->nullable();
            $table->text('marketing_ru')->nullable();
            $table->text('marketing_en')->nullable();
            $table->text('name_marketing_ru')->nullable();
            $table->text('name_marketing_en')->nullable();
            $table->text('phone_marketing')->nullable();
            $table->text('mail_marketing')->nullable();

            $table->text('field_tech_dep_ru')->nullable();
            $table->text('field_tech_dep_en')->nullable();
            $table->text('head_dep_ru')->nullable();
            $table->text('head_dep_en')->nullable();
            $table->text('name_head_dep_ru')->nullable();
            $table->text('name_head_dep_en')->nullable();
            $table->text('phone_head_dep')->nullable();
            $table->text('mail_head_dep')->nullable();

            $table->text('field_control_ru')->nullable();
            $table->text('field_control_en')->nullable();
            $table->text('head_con_ru')->nullable();
            $table->text('head_con_en')->nullable();
            $table->text('name_head_con_ru')->nullable();
            $table->text('name_head_con_en')->nullable();
            $table->text('phone_con')->nullable();


            $table->text('field_bookkeeping_ru')->nullable();
            $table->text('field_bookkeeping_en')->nullable();
            $table->text('head_bk_ru')->nullable();
            $table->text('head_bk_en')->nullable();
            $table->text('name_head_bk_ru')->nullable();
            $table->text('name_head_bk_en')->nullable();
            $table->text('phone_bk')->nullable();

            $table->text('field_sales_ru')->nullable();
            $table->text('field_sales_en')->nullable();
            $table->text('head_sales_ru')->nullable();
            $table->text('head_sales_en')->nullable();
            $table->text('name_head_sales_ru')->nullable();
            $table->text('name_head_sales_en')->nullable();
            $table->text('phone_sales')->nullable();

            $table->text('lead_spec_ru')->nullable();
            $table->text('lead_spec_en')->nullable();
            $table->text('name_lead_spec_ru')->nullable();
            $table->text('name_lead_spec_en')->nullable();
            $table->text('phone_lead_spec')->nullable();

            $table->text('spec_bad_ru')->nullable();
            $table->text('spec_bad_en')->nullable();
            $table->text('fax_bad_ru')->nullable();
            $table->text('fax_bad_en')->nullable();
            $table->text('phone_bad')->nullable();
            $table->text('mail_bad')->nullable();

            $table->text('field_sup_ru')->nullable();
            $table->text('field_sup_en')->nullable();
            $table->text('head_sup_ru')->nullable();
            $table->text('head_sup_en')->nullable();
            $table->text('name_sup_ru')->nullable();
            $table->text('name_sup_en')->nullable();
            $table->text('phone_sup_ru')->nullable();
            $table->text('phone_sup_en')->nullable();
            $table->text('mail_sup')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
