<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('typeAssurances_id');
            $table->string('police');
            $table->double('tarif');
            $table->string('date_debut');
            $table->string('date_fin');
            $table->timestamps();

            $table->foreign('typeAssurances_id')
                  ->references('id')
                  ->on('type_assurances')
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
        Schema::dropIfExists('assurances');
    }
}
