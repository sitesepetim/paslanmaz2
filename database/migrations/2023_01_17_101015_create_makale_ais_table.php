<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakaleAisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makale_ais', function (Blueprint $table) {
            $table->id();
            $table->text("makale_istegi");
            $table->text("gelen_makale")->nullable();
            $table->text("token")->nullable();
            $table->text("meta")->nullable();
            $table->text("image")->nullable();
            $table->text("image_alt")->nullable();
            $table->text("baslik")->nullable();
            $table->text("tags")->nullable();
            $table->date("date")->nullable();
            $table->text("status")->default(0);
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
        Schema::dropIfExists('makale_ais');
    }
}
