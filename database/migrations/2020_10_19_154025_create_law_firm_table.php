<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawFirmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('law_firm', function (Blueprint $table) {
            $table->id();
            $table->integer('lawyers_id');
            $table->string('law_firm_name');
            $table->text('address');
            $table->string('city');
            $table->string('province');
            $table->string('postal_code');
            $table->string('email_law_firm');
            $table->string('handphone');
            $table->string('phone');
            $table->string('id_card_number');
            $table->string('years_of_advocate_swearing');
            $table->text('files');
            $table->boolean('probono');
            $table->string('working_area_city');
            $table->string('working_area_province');
            $table->string('working_area_across_province');
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
        Schema::dropIfExists('law_firm');
    }
}
