<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersAccountNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers_account_number', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lawyers_id');
            $table->string("bank_name")->nullable();
            $table->string("no_rekening")->nullable();
            $table->string("nama_penerima")->nullable();
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
        Schema::dropIfExists('lawyers_account_number');
    }
}
