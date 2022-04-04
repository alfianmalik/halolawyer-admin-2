<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSpecializationAddIsActivated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('specialization', function (Blueprint $table) {
            $table->boolean('is_activated')->default(1)->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('specialization', function (Blueprint $table) {
            $table->dropColumn('is_activated');
        });
    }
}
