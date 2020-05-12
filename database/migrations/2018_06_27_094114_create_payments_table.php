<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('buyer_name');
            $table->string('buyer_phone');
            $table->string('buyer_email');
            $table->string('payment_id');
            $table->string('buy_status');
            $table->string('amount');
            $table->string('quantity');
            $table->string('unit_price');
            $table->string('fees');
            $table->string('instrument_type');
            $table->string('status');
            $table->string('payment_request_id');
            $table->string('payment_at');
            $table->string('payment_request_at'); 
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
        Schema::dropIfExists('payments');
    }
}
