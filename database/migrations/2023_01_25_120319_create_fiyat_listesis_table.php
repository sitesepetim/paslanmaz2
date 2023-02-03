<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFiyatListesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fiyat_listesis', function (Blueprint $table) {
            $table->id();
            $table->text("kalite");
            $table->text("kalinlik");
            $table->text("ebat");
            $table->text("kg");
            $table->text("birim");
            $table->text("plaka");
            $table->text("type");
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
        Schema::dropIfExists('fiyat_listesis');
    }
}
