<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users_vendeur');
            $table->unsignedBigInteger('id_animal_vendu');
            $table->integer('prix');
            $table->string('date_mise_en_vente');
            $table->unsignedBigInteger('id_users_acheteur');
            $table->string('date_achat');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_users_vendeur')->references('id')->on('users');
            $table->foreign('id_users_acheteur')->references('id')->on('users');
            $table->foreign('id_animal_vendu')->references('id')->on('animals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('transactions');
    }
}
