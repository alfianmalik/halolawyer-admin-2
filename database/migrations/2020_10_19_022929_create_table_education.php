<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEducation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers_formal_educations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawyers_id');
            $table->string("education_university_department");
            $table->string("education_university");
            $table->string("education_level_education")->nullable();
            $table->timestamps();

            $table->softDeletes('deleted_at', 0);
            $table->foreign('lawyers_id')->references('id')->on('lawyers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educations');
    }
}
