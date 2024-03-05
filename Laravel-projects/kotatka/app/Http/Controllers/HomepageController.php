<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    function index () {
        $polePromennych = array();
        $polePromennych['upozorneni'] = "CHYBA";
        $polePromennych["pocetNavstevniku"] = rand(0, 1000);
        $polePromennych["jmenaKotatek"] = ["Beru-chan", "Ikiru-san", "Vanilla", "Maple", "Cici"];
    
        //tato funkce prijima 2 parametry
        //1) jakou sbalonu vypsat
        //2) pole promennych
        return view('homepage', $polePromennych);
    }
}