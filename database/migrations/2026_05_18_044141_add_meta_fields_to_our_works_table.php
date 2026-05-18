<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMetaFieldsToOurWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('our_works', function (Blueprint $table) {
            $table->string('meta_title')->nullable()->after('slug');
            $table->text('meta_description')->nullable()->after('meta_title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('our_works', function (Blueprint $table) {
            $table->dropColumn([
                'meta_title',
                'meta_description'
            ]);
        });
    }
}
