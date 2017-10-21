<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancy', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('titleRu');            
            $table->string('shortdesc');
            $table->string('shortdescRu');           
            $table->string('worktime');
            $table->string('worktimeRu');        
            $table->string('location');
            $table->string('locationRu');
            $table->text('content');
            $table->text('contentRu');
            $table->string('file');
            $table->integer('published');
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
        Schema::drop('vacancy');
    }
}
