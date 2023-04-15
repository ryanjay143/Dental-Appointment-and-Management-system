<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_appointment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('treatment_id');
            $table->date('date');
            $table->time('time');
            $table->text('message')->nullable();
            $table->string('status')->nullable()->default(0)->comment("0 = Pending 1 = Confirm 2 = Arrived 3 = Done");
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
        Schema::dropIfExists('tb_appointment');
    }
};
