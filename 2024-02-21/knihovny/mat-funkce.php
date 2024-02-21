<?php
//tento soubor bude ciste PHP
//pokud je php posledni blok souboru, tak se nemusi ukoncovat
//doporucuju poho nikdy neukoncovat pokud je poslednim blokem souboru
function vyberVetsi($argA,$argB){
    if ($argA > $argB){
        return $argA;
    }else{
        return $argB;
    }
}

function spocitejObvodKruhu($argPolomer){
    return $argPolomer * pi() * 2;
}