<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nulable();
            $table->string('last_name')->nulable();
            $table->integer('gender')->nulable()->comment('1 = Male, 2 = Female');
            $table->date('dob')->nulable();
            $table->string('phone_number')->nulable();
            $table->string('address')->nulable();
            $table->string('email')->nulable();
            $table->integer('status')->default(1)->comment('1 = Actice, 0 = deleted');
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
        Schema::dropIfExists('customers');
    }
}
