<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSDFCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_d_f_c_s', function (Blueprint $table) {
            $table->id();
            $table->date('record_day');	
            $table->integer('call_answered');
            $table->integer('call_missed');
            $table->integer('call_backs');
            $table->datetime('avg_talk');
            $table->datetime('avg_wait_pickup');
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
        Schema::dropIfExists('s_d_f_c_s');
    }
}
