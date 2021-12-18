<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjournalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ejournal', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lawyers_id');
            $table->integer('category_id');
            $table->string('mitra_name')->nullable();
            $table->string('writer')->nullable();
            $table->string('title_file');
            $table->string('type_file');
            $table->string('file')->nullable();
            $table->string('year_published')->length(4)->nullable();
            $table->boolean('status')->default(0);
            $table->text('link')->nullable();

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
        Schema::dropIfExists('ejournal');
    }
}
