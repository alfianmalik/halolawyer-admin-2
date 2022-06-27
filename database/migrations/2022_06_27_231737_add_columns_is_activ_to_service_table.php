<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsIsActivToServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service', function (Blueprint $table) {
            //
            $table->boolean("is_active")->after("list_benefit")->default(true);
            $table->boolean("is_coming_soon")->after("is_active")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service', function (Blueprint $table) {
            //
            $table->dropColumn("is_active");
            $table->dropColumn("is_coming_soon");
        });
    }
}
