<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoFileToFoundationImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foundation_images', function (Blueprint $table) {
            $table->string('media_type')->default('image')->after('foundation_categories_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foundation_images', function (Blueprint $table) {
            $table->dropColumn([
                'media_type'
            ]);
        });
    }
}
