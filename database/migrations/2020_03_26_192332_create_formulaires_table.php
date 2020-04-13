<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->default(20);
            $table->string('lastname')->default(20);
            $table->string('email')->default(50);
            $table->string('direction');
            $table->string('nomForm');
            $table->text('discForm');
            $table->string('cible');
            $table->string('valid');
            $table->string('besoin');
            $table->text('comp');
            $table->text('niveau');
            $table->text('objectif');
            $table->string('urgence');
            $table->string('importance');
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
        Schema::dropIfExists('formulaires');
    }
}
