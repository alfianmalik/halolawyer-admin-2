<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLawyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->uuid('uuid');
            $table->rememberToken();
            $table->string('phone')->nullable();
            $table->date('bod')->nullable();
            $table->string('gender')->nullable();
            $table->string('work')->nullable();
            $table->string('religion')->nullable();
            $table->string('profile_picture')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            
            $table->string('slug');
            $table->string('location')->nullable();
            $table->string('province_id')->nullable();
            $table->string('city_id')->nullable();
            $table->string('district_id')->nullable();
            $table->text('expertise_specialization')->nullable();
            $table->text("consultation")->nullable();
            $table->date('lawyers_since')->nullable();
            $table->integer('is_favorite')->length(1)->default(0);
            $table->integer('is_special')->length(1)->default(0);
            $table->string('provider')->nullable();
            $table->string('provider_id')->nullable();

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
        Schema::dropIfExists('lawyers');
    }
}
