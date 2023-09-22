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
        Schema::create('posudbas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("clan_id")->constrained("clans");
            $table->foreignId("knjiga_id")->constrained("knjigas");
            $table->date("datum_posudbe");
            $table->date("datum_povrata")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posudbas');
    }
};
