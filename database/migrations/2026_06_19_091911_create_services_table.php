<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('services_category_id');
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_content')->nullable();
            $table->longText('content')->nullable();
            $table->string('main_image')->nullable();
            $table->string('icon_image')->nullable();
            $table->string('details_image')->nullable();
            $table->string('breadcrumb_image')->nullable();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            $table->foreign('services_category_id')
                  ->references('id')
                  ->on('services_categories')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
