<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('record_day');	
            $table->integer('chn_livechat');
            $table->integer('chn_mail');
            $table->integer('chn_twitter');
            $table->integer('chn_facebook');
            $table->integer('chn_whatsapp');
            $table->integer('chn_viber');
            $table->integer('chn_telegram');
            $table->integer('chn_messenger');
            $table->integer('esc_med_br_open');
            $table->integer('esc_med_jc_open');
            $table->integer('esc_med_er_open');
            $table->integer('esc_med_br_closed');
            $table->integer('esc_med_jc_closed');
            $table->integer('esc_med_er_closed');
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
        Schema::dropIfExists('tickets');
    }
}
