<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoParent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photoParent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameRu');
            $table->string('description');
            $table->string('descriptionRu');
            $table->string('author');
            $table->string('authorRu');
            $table->binary('images');
            $table->boolean('published')->nullable()->default(false);;
            $table->string('status');
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
        Schema::drop('photoParent');
    }
}
