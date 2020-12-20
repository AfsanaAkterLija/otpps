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
            $table->string('tourist_id');
            $table->string('plan_id');
            $table->string('status');
            $table->string('payment_status');
            $table->string('paid_amount');
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
