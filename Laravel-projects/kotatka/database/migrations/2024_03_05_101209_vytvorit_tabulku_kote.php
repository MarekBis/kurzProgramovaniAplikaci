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
        Schema::create('kote',function(Blueprint $table){
            $table->id(); //int unsigned primary key auto_increment
            $table->string('jmeno')->nullable(false); //varchar(255)
            $table->string('pohlavi')->nullable(false);//varchar(255) not null
            $table->integer('vek')->unsigned(); //INT
            $table->boolean('k_adopci')->default(false);
            $table->timestamps();

        }

        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kote');
    }
};
