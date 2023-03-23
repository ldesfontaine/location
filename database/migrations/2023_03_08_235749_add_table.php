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
        Schema::table('vehicules', function (Blueprint $table) {
            $table->date('date_premiere_mise_en_circulation')->nullable();
            $table->date('date_rentrée_au_garage')->nullable();
            $table->integer('nombre_chevaux_fiscaux')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicules', function (Blueprint $table) {
            $table->dropColumn('date_premiere_mise_en_circulation');
            $table->dropColumn('date_rentrée_au_garage');
            $table->dropColumn('nombre_chevaux_fiscaux');
        });
    }
};
