<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nurses', function (Blueprint $table) {
            $table->bigIncrements('nurse_id')->id()->unsigned();
            $table->string('nurse_name');
            $table->string('murse_salary');
            $table->string('nurse_shift');
            $table->string('nurse_phone');
            $table->string('nurse_address');
            $table->unsignedBigInteger('room_id')->nullable();
            $table->foreign('room_id')->references('room_id')->on('rooms')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('nurses');
    }
}
