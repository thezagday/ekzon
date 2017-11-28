<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ru')->nullable();
            $table->string('title_en')->nullable();
            $table->string('reg_ru')->nullable();
            $table->string('reg_en')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('inter_name')->nullable();
            $table->string('short_desc_ru')->nullable();
            $table->string('short_desc_en')->nullable();
            $table->string('appointment_ru')->nullable();
            $table->string('appointment_en')->nullable();
            $table->integer('volume')->nullable();
            $table->boolean('recipe')->nullable();
            $table->text('desc_ru')->nullable();
            $table->text('desc_en')->nullable();
            $table->string('img')->nullable();
            $table->boolean('isNew')->nullable();
            $table->integer('category')->nullable();
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
        Schema::dropIfExists('products');
    }
}
