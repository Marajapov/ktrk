<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoParent extends Migration
{
<<<<<<< HEAD
    /**
     * Run the migrations.
     *
     * @return void
     */
=======

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function up()
    {
        Schema::create('photoParent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('nameRu');
            $table->text('description');
            $table->text('descriptionRu');
            $table->string('author');
            $table->string('authorRu');
            $table->binary('images');

            $table->string('director');
            $table->string('ns');
            $table->string('rs');
            $table->string('muzkanal');
            $table->string('kyrgyzradio');
            $table->string('birinchi');
            $table->string('balastan');
            $table->string('madaniyat');
            $table->string('minkiyal');
            $table->string('dostuk');
            $table->string('extracolumn');
            
            $table->boolean('published')->nullable()->default(false);;
            $table->string('status');
            $table->string('thumbnail_big');
<<<<<<< HEAD
=======
            $table->integer('watermark');

>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
            $table->smallInteger('viewed')->default(0);
            $table->timestamps();
        });
    }

<<<<<<< HEAD
    /**
     * Reverse the migrations.
     *
     * @return void
     */
=======
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
    public function down()
    {
        Schema::drop('photoParent');
    }
}
<<<<<<< HEAD
=======

?>
>>>>>>> 9912446fe5daa1d87038e6c8810b71aa0e9850be
