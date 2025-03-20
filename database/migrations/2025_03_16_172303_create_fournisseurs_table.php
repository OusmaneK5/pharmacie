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
    Schema::create('fournisseurs', function (Blueprint $table) {
        $table->id();
        $table->string('nom', 255);
        $table->string('contact', 50)->nullable();
        $table->text('adresse')->nullable();
        $table->string('email')->unique()->nullable();
        $table->string('telephone', 20)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseurs');
    }
};
