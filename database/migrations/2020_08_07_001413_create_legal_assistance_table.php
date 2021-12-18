<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLegalAssistanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('legal_assistance', function (Blueprint $table) {
            $table->id();
            $table->text('story');
            $table->text('phone');
            $table->text('email');
            $table->integer('is_check')->default(0)->length(1);
            $table->integer('is_call')->default(0)->length(1);
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
        Schema::dropIfExists('legal_assistance');
    }
}
