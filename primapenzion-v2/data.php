<?php
class Stranka {
    public $id;
    public $titulek;
    public $menu;
    public $obrazek;

    function __construct($argId, $argTitulek, $argMenu, $argObrazek)
    {
        $this->id = $argId;
        $this->titulek = $argTitulek;
        $this->menu = $argMenu;
        $this->obrazek = $argObrazek;
    }
    
    function getObsah() {
        $obsah = file_get_contents("./$this->id.html");
        return $obsah;
    }

    function setObsah($argNovyObsah) {
        file_put_contents("./$this->id.html", $argNovyObsah);
        return;
    }

}//endStranka


$poleStranek = [
    "domu" => new Stranka(
        "domu",
        "PrimaPenzion",
        "Home",
        "primapenzion-main.jpg"
    ),
    "galerie" => new Stranka(
        "galerie",
        "Fotogalerie",
        "Foto",
        "primapenzion-pool-min.jpg"
    ),
    "kontakt" => new Stranka(
        "kontakt",
        "Kontakty",
        "Napište nám",
        "primapenzion-room.jpg"
    ),
    "rezervace" => new Stranka(
        "rezervace",
        "Rezervace",
        "Chci pokoj",
        "primapenzion-room2.jpg"
    ),
    "404" => new Stranka(
        "404",
        "Stranka neexistuje",
        "", //404 bude mit prazdny menu string
        "primapenzion-room2.jpg"
    )
];