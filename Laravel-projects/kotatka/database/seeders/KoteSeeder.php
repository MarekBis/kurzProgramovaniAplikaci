<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kote;
class KoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modelKote = new Kote;
        $modelKote->jmeno = "Ikiru";
        $modelKote->pohlavi="samec";
        $modelKote->vek="2";
        $modelKote->k_adopci=true;
        $modelKote->barva="cerna";
        $modelKote->save(); //INSERT INTO
        
        $modelKote = new Kote;
        $modelKote->jmeno = "Beru-chan";
        $modelKote->pohlavi="samice";
        $modelKote->vek="4";
        $modelKote->k_adopci=false;
        $modelKote->barva="oranzova";
        $modelKote->save(); //INSERT INTO
        
        $modelKote = new Kote;
        $modelKote->jmeno = "Spajk";
        $modelKote->pohlavi="samec";
        $modelKote->vek="14";
        $modelKote->k_adopci=false;
        $modelKote->barva="bila";
        $modelKote->save(); //INSERT INTO
    }
}
