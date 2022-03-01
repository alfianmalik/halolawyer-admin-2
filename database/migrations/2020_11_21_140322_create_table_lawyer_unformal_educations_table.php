<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLawyerUnformalEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers_unformal_educations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lawyers_id');
            $table->string('education_type')->nullable();
            $table->string('education_title')->nullable();
            $table->string('education_year')->nullable();
            $table->text('certificate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_lawyer_unformal_educations');
    }
}
