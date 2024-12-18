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
        Schema::create('machinists', function (Blueprint $table) {
            $table->id();
            $table->string("first_name")->nullable(false);
            $table->string("last_name")->nullable(false);
            $table->date("date_of_birth")->nullable(false);
            $table->string("country")->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('machinists');
    }
};
