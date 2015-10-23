<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->text('content');
            $table->integer('channel_id')->nullable()->unsigned()->default(null);
            $table->integer('category_id')->nullable()->unsigned()->default(null);
            $table->integer('owner_id')->nullable()->unsigned()->default(null);
            $table->text('description')->nullable();
            $table->string('thumbnail');
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
            $table->string('photo4');
            $table->string('photo5');
            $table->string('photo6');
            $table->string('photo7');
            $table->string('photo8');
            $table->string('photo9');
            $table->string('photo10');
            $table->enum('type', ['page', 'post'])->nullable()->default('post');
            $table->boolean('published')->nullable()->default(false);
            $table->boolean('general')->nullable()->default(false);
            $table->smallInteger('viewed')->default(0);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('set null');
            $table->foreign('channel_id')->references('id')->on('channels')->onUpdate('cascade')->onDelete('set null');
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
        Schema::drop('posts');
    }
}
