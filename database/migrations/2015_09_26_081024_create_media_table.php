<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resource_id')->nullable()->unsigned()->default(null);
            $table->string('videoType')->nullable()->default(null);
            $table->string('name');
            $table->string('description',500);
            $table->string('url');
            $table->string('nameRu');
            $table->enum('type', ['image', 'video'])->nullable()->default('image');
            $table->integer('owner_id')->nullable()->unsigned()->default(null);
            $table->boolean('published')->nullable()->default(false);
            $table->smallInteger('viewed')->default(0);
            $table->boolean('dayVideo')->nullable()->default(false);
            $table->string('video1',500);
            $table->string('video2',500);
            $table->string('video3',500);
            $table->string('video4',500);
            $table->string('status',500);
            $table->string('program');
            $table->timestamps();

            $table->foreign('owner_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('medias');
    }
}
