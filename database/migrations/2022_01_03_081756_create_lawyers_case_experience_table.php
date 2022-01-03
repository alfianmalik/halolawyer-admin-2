<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersCaseExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers_case_experience', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("lawyers_id");
            $table->string('title');
            $table->integer('case_category_id');
            $table->string('year');
            $table->string('type');
            $table->text('reason');

            $table->softDeletes('deleted_at', 0);
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
        Schema::dropIfExists('lawyers_case_experience');
    }
}
