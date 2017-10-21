<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancynewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancynews', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('titleRu');
            $table->text('content');
            $table->text('contentRu');
            $table->string('shortDescription');
            $table->string('shortDescriptionRu');
            $table->string('thumbnail');
            $table->string('thumbnail_big');
            $table->string('thumb_desc');
            $table->string('thumb_desc_ru');
            $table->string('thumb_author');
            $table->boolean('published')->nullable()->default(false);
            $table->smallInteger('viewed')->default(0);
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
        Schema::drop('vacancynews');
    }
}
