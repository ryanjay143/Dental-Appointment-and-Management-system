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
        Schema::create('tambals', function (Blueprint $table) {
            $table->id();
            $table->string('doctorName')->nullable();
            $table->string('patientName')->nullable();
            $table->string('services')->nullable();
            $table->string('remarks')->nullable();
            $table->string('total')->nullable();
            $table->string('status')->nullable()->default(0)->comment("0 = Not Paid 1 = Paid");
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
        Schema::dropIfExists('tambals');
    }
};
