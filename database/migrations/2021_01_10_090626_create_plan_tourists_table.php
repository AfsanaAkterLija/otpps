<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanTouristsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_tourists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_id');
            $table->foreignId('tourist_id');
            $table->string('status')->default('pending');
            $table->string('transaction_id');
            $table->string('payment_method');
            $table->string('paid_amount');
            $table->string('transaction_number');
            $table->text('receipt')->nullable();
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
        Schema::dropIfExists('plan_tourists');
    }
}
