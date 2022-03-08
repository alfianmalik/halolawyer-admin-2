<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentMakingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('document_makings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('making_by');
            $table->string('needed');
            $table->text('description');
            $table->integer('price');
            $table->integer('discount');
            $table->string('finished');
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
        Schema::dropIfExists('document_makings');
    }
}
