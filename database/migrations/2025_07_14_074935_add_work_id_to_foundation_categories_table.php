<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWorkIdToFoundationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foundation_categories', function (Blueprint $table) {            
            $table->unsignedBigInteger('work_id')->nullable()->after('name');
             $table->foreign('work_id')->references('id')->on('our_works')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foundation_categories', function (Blueprint $table) {
            $table->dropForeign(['work_id']);
            $table->dropColumn('work_id');
        });
    }
}
