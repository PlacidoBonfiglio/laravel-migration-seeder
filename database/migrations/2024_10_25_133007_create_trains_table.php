<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("Azienda", 100)->nullable(false);
            $table->date("Data_di_partenza")->nullable(false);
            $table->string("Stazione_di_partenza", 150)->nullable(false);
            $table->string("Stazione_di_arrivo", 150)->nullable(false);
            $table->time("Orario_di_partenza")->nullable(false);
            $table->time("Orario_di_arrivo")->nullable(false);
            $table->string("Codice_treno")->unique->nullable(false);
            $table->tinyInteger("Numero_carrozze")->unsigned;
            $table->boolean("In_orario")->default(true)->nullable(false);
            $table->boolean("Cancellato")->default(false)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
