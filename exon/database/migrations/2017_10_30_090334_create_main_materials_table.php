<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->text('text_first_ru')->nullable();
            $table->text('text_first_en')->nullable();
            $table->text('text_second_ru')->nullable();
            $table->text('text_second_en')->nullable();
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
        Schema::dropIfExists('main_materials');
    }
}
