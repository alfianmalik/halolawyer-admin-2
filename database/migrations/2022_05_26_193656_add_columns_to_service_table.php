<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('service_details', function (Blueprint $table) {
            //
            $table->longText('benefit')->after('price')->nullable();
            $table->longText('description')->after('benefit')->nullable();
            $table->float('share')->after('description')->nullable();
            $table->float('commission')->after('share')->nullable();
            $table->boolean('is_open_profile')->after('commission')->default(1);
            $table->boolean('is_active')->after('is_open_profile')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('service_details', function (Blueprint $table) {
            //
            $table->dropColumn('benefit');
            $table->dropColumn('description');
            $table->dropColumn('share');
            $table->dropColumn('commission');
            $table->dropColumn('is_open_profile');
            $table->dropColumn('is_active');
        });
    }
}
