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
        Schema::table('ventes_details', function (Blueprint $table) {
            $table->foreign('vente_id')->references('id')->on('ventes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventes_details', function (Blueprint $table) {
            $table->dropForeign('ventes_details_vente_id_foreign');
        });
    }
};
