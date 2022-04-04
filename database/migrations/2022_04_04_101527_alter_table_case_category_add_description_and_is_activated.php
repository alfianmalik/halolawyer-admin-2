<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableCaseCategoryAddDescriptionAndIsActivated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('case_category', function (Blueprint $table) {
            $table->text('description')->nullable()->after('name');
            $table->string('icon')->nullable()->after('description');
            $table->boolean('is_activated')->default(1)->after('icon');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('case_category', function (Blueprint $table) {
            $table->dropColumn('description');
            $table->dropColumn('is_activated');
        });
    }
}
