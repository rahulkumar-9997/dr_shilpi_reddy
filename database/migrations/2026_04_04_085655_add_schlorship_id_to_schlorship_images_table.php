<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSchlorshipIdToSchlorshipImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('schlorship_images', function (Blueprint $table) {
            $table->foreignId('schlorship_id')->after('id')->nullable()->constrained('schlorships')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schlorship_images', function (Blueprint $table) {
            $table->dropForeign(['schlorship_id']);
            $table->dropColumn('schlorship_id');
        });
    }
}
