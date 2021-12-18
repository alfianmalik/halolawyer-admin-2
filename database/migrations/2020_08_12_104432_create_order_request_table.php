<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_uuid');
            $table->string('invoice_id')->nullable();
            $table->string('service_name');
            $table->integer('service_id');
            $table->integer('service_details_id');
            $table->integer('chat_id')->nullable();
            $table->string('makingdocuments_service_id')->nullable();
            $table->string('makingdocuments_service_name')->nullable();
            $table->string('lawyer_uuid');
            $table->string('lawyer_name');
            $table->string('lawyer_schedule');
            $table->string('catatan')->nullable();
            $table->integer('user_id');
            $table->string('user_name');
            $table->string('user_first_name');
            $table->string('user_last_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('payment_status')->length(20)->default('pending');
            $table->decimal('service_price', 10, 2);
            $table->decimal('management_fee', 10, 2);
            $table->decimal('total', 10, 2);
            $table->integer('is_waiting')->default(0);
            $table->integer('is_finished')->default(0);
            $table->text('midtrans')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
