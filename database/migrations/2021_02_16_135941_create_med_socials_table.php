<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('med_socials', function (Blueprint $table) {
            $table->id();
            $table->date('record_day');	
            $table->integer('livechat');
            $table->integer('viber');
            $table->integer('twitter');
            $table->integer('facebook');
            $table->integer('telegram');
            $table->integer('whatsapp');
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
        Schema::dropIfExists('med_socials');
    }
}
