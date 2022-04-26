<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableLawyersSpecializationAddLawyerCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('lawyers_specialization', function (Blueprint $table) {
            $table->bigInteger("lawyers_category_id")->after("lawyers_id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lawyers_specialization', function (Blueprint $table) {
            $table->dropColumn("lawyers_category_id");
        });
    }
}
