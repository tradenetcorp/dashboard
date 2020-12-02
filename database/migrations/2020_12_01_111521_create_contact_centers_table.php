<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_centers', function (Blueprint $table) {
            $table->id();
            $table->integer('agents_oncall');
            $table->integer('agents_onmedia');
            $table->integer('call_answered');
            $table->integer('call_missed');
            $table->integer('call_backs');
            $table->time('avg_talk');
            $table->time('avg_wait_pickup');
            $table->time('avg_wait_hangup');
            $table->time('peak_avg_wait_pickup');
            $table->time('peak_avg_wait_hangup');
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
        Schema::dropIfExists('contact_centers');
    }
}
