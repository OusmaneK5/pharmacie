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
    Schema::create('ordonnances', function (Blueprint $table) {
        $table->id();
        $table->string('nom_client', 255);
        $table->string('contact_client', 20)->nullable();
        $table->date('date_prescription');
        $table->string('medecin', 255)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordonnances');
    }
};
