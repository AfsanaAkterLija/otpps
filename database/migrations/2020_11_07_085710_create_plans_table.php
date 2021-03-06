<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->integer('tourist_id');
            $table->string('plan_type');
            $table->string('total_no_of_participants');
            $table->string('no_of_joined_people');
            $table->foreignId('location_id');
            $table->foreignId('transport_id');
            $table->string('destination_from');
            $table->string('destination_to');
            $table->string('date_from');
            $table->string('date_to');
            $table->string('remarks');
            $table->string('token_money');
            $table->string('approximate_budget');
            $table->string('transaction_number');
            $table->string('is_approved');

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
        Schema::dropIfExists('plans');
    }
}
