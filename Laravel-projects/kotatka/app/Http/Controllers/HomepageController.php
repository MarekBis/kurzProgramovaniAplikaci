<?php

namespace App\Http\Controllers;
use App\Models\Kote;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function index () {
        $polePromennych = array();
        $polePromennych['upozorneni'] = "CHYBA";
        $polePromennych["pocetNavstevniku"] = rand(0, 1000);
        $polePromennych["casyKrmeni"] = ["8:00", "14:00", "18:00"];
        
        // $poleKotatek = Kote::where("barva","cerna")->get();
        $poleKotatek = Kote::all(); //vsechna zazanym v tabulce kote

        // $poleKotatek = Kote::where("vek",">=",3)->get();

        $polePromennych['poleKotatek'] = $poleKotatek;

        $jednoKote = Kote::find(2);
        $polePromennych["koteMesice"] = $jednoKote;

        //tato funkce prijima 2 parametry
        //1) jakou sbalonu vypsat
        //2) pole promennych
        return view('homepage', $polePromennych);
    }
}