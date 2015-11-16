<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoChield extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photoChield', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parentId');
            $table->string('name');
            $table->string('nameRu');
            $table->string('file');
            $table->string('photoTag');
            $table->string('photoTagRu');
            $table->string('description');
            $table->string('descriptionRu');
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
        Schema::drop('photoChield');
    }
}
