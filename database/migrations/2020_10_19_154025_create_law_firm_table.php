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
        Schema::create('lawyers_law_firm', function (Blueprint $table) {
            $table->id();
            $table->integer('lawyers_id');
            $table->string('law_firm_name')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('email_law_firm')->nullable();
            $table->string('handphone')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_card_number')->nullable();
            $table->string('years_of_advocate_swearing')->nullable();
            $table->string('long_working_years')->nullable();
            
            $table->boolean('probono')->nullable();
            $table->string('working_area_city')->nullable();
            $table->string('working_area_province')->nullable();
            $table->string('working_area_across_province')->nullable();
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
