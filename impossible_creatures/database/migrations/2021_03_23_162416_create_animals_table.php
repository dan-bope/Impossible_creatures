<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('especes');
            $table->unsignedBigInteger('id_users_cree');
            $table->unsignedBigInteger('id_users_proprietaire');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_users_cree')->references('id')->on('users');
            $table->foreign('id_users_proprietaire')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('animals', function (Blueprint $table) {
           $table->dropSoftDeletes();
        });
        Schema::dropIfExists('animals');
    }
}
