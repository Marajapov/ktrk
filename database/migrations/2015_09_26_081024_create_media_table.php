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
            $table->string('resource_type')->nullable()->default(null);
            $table->string('name');
            $table->string('description',500);
            $table->string('url');
            $table->enum('type', ['image', 'video'])->nullable()->default('image');
            $table->integer('owner_id')->nullable()->unsigned()->default(null);
            $table->boolean('published')->nullable()->default(false);
            $table->smallInteger('viewed')->default(0);
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
