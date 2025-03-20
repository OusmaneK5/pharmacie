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
    Schema::create('medicaments', function (Blueprint $table) {
        $table->id();
        $table->string('nom', 255);
        $table->text('sdescription')->nullable();
        $table->string('categorie', 100);
        $table->integer('quantite')->default(0);
        $table->decimal('prix', 10, 2);
        $table->date('date_expiration');
        $table->unsignedBigInteger('fournisseur_id');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
