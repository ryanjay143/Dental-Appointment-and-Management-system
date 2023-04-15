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
        Schema::create('tb_user', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username')->unique();
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('registration_num')->nullable();
            $table->integer('user_type')->default(0)->comment("0 = patient 1 = admin 2 = dentist");
            $table->string('dentist_pro')->nullable()->comment("0 = General Dentist 1 = Orthodontist 2 = Periodontist 3 = Oral and Maxillofacial Surgeon 4 = Dental Hygienist");
            $table->string('password');
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
        Schema::dropIfExists('tb_user');
    }
};
