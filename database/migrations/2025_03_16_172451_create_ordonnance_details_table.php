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
    Schema::create('ordonnance_details', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('ordonnance_id');
        $table->unsignedBigInteger('medicament_id');
        $table->integer('quantite');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordonnance_details');
    }
};
