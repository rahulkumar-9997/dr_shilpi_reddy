<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToFoundationCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foundation_categories', function (Blueprint $table) {
            if (!Schema::hasColumn('foundation_categories', 'slug')) {
                $table->string('slug')->nullable()->after('name');
            }

            if (!Schema::hasColumn('foundation_categories', 'meta_title')) {
                $table->string('meta_title')->nullable()->after('slug');
            }

            if (!Schema::hasColumn('foundation_categories', 'meta_description')) {
                $table->text('meta_description')->nullable()->after('meta_title');
            }
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
            $table->dropColumn([
                'slug',
                'meta_title',
                'meta_description'
            ]);
        });
    }
}
