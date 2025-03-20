<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoundationImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foundation_images', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('foundation_categories_id');
            $table->string('image_path');
            $table->string('sort_order');
            $table->timestamps();
            $table->foreign('foundation_categories_id')->references('id')->on('foundation_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foundation_images');
    }
}
