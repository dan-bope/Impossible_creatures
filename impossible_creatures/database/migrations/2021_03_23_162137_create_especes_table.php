<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('deux_epeces_parents');
            $table->unsignedBigInteger('users_inventaire');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('users_inventaire')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('especes', function (Blueprint $table) {
           $table->dropSoftDeletes();
        });
        Schema::dropIfExists('especes');
    }
}
