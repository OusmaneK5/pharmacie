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
         Schema::table('ordonnance_details', function (Blueprint $table) {
             $table->foreign('ordonnance_id')->references('id')->on('ordonnances');
         });
     }
     /**
      * Reverse the migrations.
      */
     public function down(): void
     {
         Schema::table('ordonnance_details', function (Blueprint $table) {
             $table->dropForeign('ordonnance_details_ordonnance_id_foreign');
         });
     }
};
