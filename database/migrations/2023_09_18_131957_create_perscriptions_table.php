<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perscriptions', function (Blueprint $table) {
            $table->bigIncrements('perscription_id')->id()->unsigned();
            $table->string('DisesType');
            $table->date('AppDate');
            $table->time('AppHour');

            $table->string('Drogone')->nullable();
            $table->string('Drogotwo')->nullable();
            $table->string('Drogthree')->nullable();
            $table->string('Drogfour')->nullable();
            $table->string('Drogfive')->nullable();
            $table->string('Drogsix')->nullable();
            $table->string('Drogseven')->nullable();
            $table->string('Drogeight')->nullable();
            $table->string('Drognine')->nullable();
            $table->string('Drogten')->nullable();
            $table->string('Drogeleven');

            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            


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
        Schema::dropIfExists('perscriptions');
    }
}
