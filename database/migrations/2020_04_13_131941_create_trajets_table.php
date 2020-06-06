<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrajetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trajets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id');
            $table->string('date_départ');
            $table->string('date_arrivé');
            $table->string('Temps_pause');
            $table->string('Lieu_départ')->nullable();
            $table->string('Lieu_arrivé')->nullable();
            $table->string('Ville_départ')->nullable();
            $table->string('Ville_arrivé')->nullable();
            $table->string('pays_départ')->nullable();
            $table->string('pays_arrivé')->nullable();
            $table->timestamps();

            $table->foreign('type_id')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trajets');
    }
}
