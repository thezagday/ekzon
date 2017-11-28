<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address_ru',255)->nullable();
            $table->string('address_en',255)->nullable();
            $table->string('phone1',255)->nullable();
            $table->string('phone2',255)->nullable();
            $table->string('mail',255)->nullable();
            $table->string('copyright_ru',255)->nullable();
            $table->string('copyright_en',255)->nullable();
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
        Schema::dropIfExists('infos');
    }
}
