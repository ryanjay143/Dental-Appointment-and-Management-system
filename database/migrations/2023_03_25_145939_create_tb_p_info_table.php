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
        Schema::create('tb_p_info', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Personal_information');
            $table->string('month')->comment("0 = January 1 = February 2 = March 3 = April 4 = May 5 = June 6 = July 7 = August 8 = September 9 = October 10 = November 11 = December");
            $table->integer('day');
            $table->integer('year');
            $table->string('status')->default(0)->comment("0 = single 1 = married 2 = divorced 3 = Separated 4 = Widowed");
            $table->string('gender')->comment("0 = Male 1 = Female");
            $table->string('phone_number');
            $table->string('location');
            $table->string('state');
            $table->integer('zip_code');
            $table->string('E_firstname');
            $table->string('E_lastname');
            $table->string('relationship');
            $table->string('E_contact_num');
            $table->string('weight');
            $table->string('height');
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
        Schema::dropIfExists('tb_p_info');
    }
};
