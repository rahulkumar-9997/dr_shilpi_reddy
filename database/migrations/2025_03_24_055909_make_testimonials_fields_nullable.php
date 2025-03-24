<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MakeTestimonialsFieldsNullable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('name', 255)->nullable()->change();
            $table->string('profile_image', 255)->nullable()->change();
            $table->longText('testimonials_content')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testimonials', function (Blueprint $table) {
            $table->string('name', 255)->nullable(false)->change();
            $table->string('profile_image', 255)->nullable(false)->change();
            $table->longText('testimonials_content')->nullable(false)->change();
        });
    }
}
