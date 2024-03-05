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
        //pokud editujete existujici tabulku
        //chcem ejen pridat sloupecek barva
        Schema::table("kote", function (Blueprint $table) {
            //zde pridame nove sloupecky
            $table->string("barva");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kote', function (Blueprint $table) {
            $table->dropColumn('barva');
        });
    }
};
