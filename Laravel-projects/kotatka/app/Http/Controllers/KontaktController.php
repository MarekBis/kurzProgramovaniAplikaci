<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontaktController extends Controller
{
    function index() {
        $polePromennych = array();
        $polePromennych["email"]="seznam@seznam.cz";
        $polePromennych["adresa"]="Jablonskeho 640";
        $polePromennych["tel"]=772345787;
        
        return view("kontakt",$polePromennych);
    }
}