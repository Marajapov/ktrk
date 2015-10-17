<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMediaCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('name_ru');
            $table->string('title');
            $table->string('title_ru');
            $table->string('description', 500);
            $table->string('description_ru', 500);
            $table->string('resource_type', 200);
            $table->smallInteger('order')->nullable()->default(0);
            $table->boolean('published')->nullable()->default(false);
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
        Schema::drop('media_category');
    }
}
