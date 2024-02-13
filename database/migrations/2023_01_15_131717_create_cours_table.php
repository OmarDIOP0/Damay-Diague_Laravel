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
        Schema::create('cours', function (Blueprint $table) {
            $table->id();
            $table->string("libelle")->unique(true);
            $table->string("slug")->unqiue(true);
            $table->string('description');
            $table->string("published");
            $table->string('nomFichier');
            $table->foreignId("matiere_id")->constrained("matieres");
            $table->foreignId("level_id")->constrained("levels");
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
        Schema::dropIfExists('cours');
    }
};