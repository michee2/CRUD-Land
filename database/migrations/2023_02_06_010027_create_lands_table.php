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
            $table->increments("id");
            $table->string("Libelle")->nullable();
            $table->text("description");
            $table->integer("code_indicatif")->unique();
            $table->enum("Continent", ["Amérique", "Europe", "Asie", "Afrique", "Océanie", "Antarctique"]);
            $table->integer("population");
            $table->string("capitale");
            $table->enum("monnaie", ["XOF", "EUR", "DOLLAR"]);
            $table->enum("langue", ["FR", "EN", "AR", "ES"]);
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
