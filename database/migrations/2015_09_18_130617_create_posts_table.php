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
            $table->integer('parentId')->nullable();
            $table->string('thumbnail');
            $table->enum('type', ['page', 'post'])->nullable()->default('post');
            $table->boolean('published')->nullable()->default(false);
            $table->boolean('announcement')->nullable()->default(false);
            $table->integer('related1')->nullable()->unsigned()->default(null);
            $table->integer('related2')->nullable()->unsigned()->default(null);
            $table->integer('related3')->nullable()->unsigned()->default(null);
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
