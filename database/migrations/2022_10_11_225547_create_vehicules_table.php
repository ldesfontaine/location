<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string(column:'nom');
            $table->string(column:'marque');
            $table->float(column:'prix_ht');
            $table->text(column:'description');
            $table->string(column:'photo_principal');
            $table->integer(column:'roues');
            $table->integer(column:'places');
            $table->string(column:'carburant');
            $table->string(column:'boite_vitesse');
            $table->string(column:'couleur');
            $table->text(column:'plaque');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicules');
    }
};
