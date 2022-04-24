<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorySpecializationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_specialization', function (Blueprint $table) {
            $table->bigInteger('case_category_id')->unsigned();
            $table->bigInteger('specialization_id')->unsigned();
            $table->foreign('case_category_id')->references('id')->on('case_category')->onDelete('cascade');
            $table->foreign('specialization_id')->references('id')->on('specialization')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_specialization');
    }
}
