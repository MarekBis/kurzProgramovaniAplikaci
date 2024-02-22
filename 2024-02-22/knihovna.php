<?php

namespace Tony {
    class Fixa
    {
        public $barva;
        public $maxObjem;
        public $stav;

        function __construct($argBarva, $argMaxObjem, $argStav)
        {
            $this->barva = $argBarva;
            $this->maxObjem = $argMaxObjem;
            $this->stav = $argStav;
        }
    }

    class Mobil{
        public $znacka;
        public $cena;

        function __construct($argZnacka, $argCena)
        {   
            $this->znacka = $argZnacka;
            $this->cena = $argCena;
        }
    }
    
}
