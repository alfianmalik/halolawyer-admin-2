<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsDetailsToServiceTable extends Migration
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
            $table->text("icon")->after("service_name")->nullable();
            $table->text("description")->after("icon")->nullable();
            $table->text("list_benefit")->after("description")->nullable();
            $table->text("link")->after("service_name")->nullable();
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
            $table->dropColumn("icon");
            $table->dropColumn("description");
            $table->dropColumn("list_benefit");
            $table->dropColumn("link");
        });
    }
}
