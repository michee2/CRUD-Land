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
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->string("Libelle")->nullable();
            $table->text("description");
            $table->integer("code_indicatif");
            $table->string("Continent");
            $table->string("population");
            $table->string("capitale");
            $table->string("monnaie");
            $table->string("langue");
            $table->integer("Superficie");
            $table->boolean("est_laique")->default(true);
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
        Schema::dropIfExists('lands');
    }
};
