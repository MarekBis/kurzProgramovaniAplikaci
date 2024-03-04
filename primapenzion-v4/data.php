<?php
//pripojime projekt k databazi
$instanceDB = new PDO(
    "mysql:host=127.0.0.1:3306;dbname=penzion;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

class Stranka {
    public $id;
    public $titulek;
    public $menu;
    public $obrazek;
    public $oldId = "";

    function __construct($argId, $argTitulek, $argMenu, $argObrazek)
    {
        $this->id = $argId;
        $this->titulek = $argTitulek;
        $this->menu = $argMenu;
        $this->obrazek = $argObrazek;
    }
    //staticka funkce nepatri instanci
    //staticka funkce patri classe
    static function seraditStranky($argPoleId){

        foreach ($argPoleId as $index => $idStranky) {
            $prikaz = $GLOBALS['instanceDB']->prepare("UPDATE stranka SET poradi=? WHERE id=?");
            $prikaz->execute(array($index,$idStranky));
        }
    }

    function getObsah() {
        //uvnitr classy nelze pouzivat promene, ktere jsou anedifnovane venku mimo classu, pokud potrebujeme nejakou takovouto promennou pouzti, tak musime skrze pole $GLOBALS
        $prikaz = $GLOBALS["instanceDB"]->prepare("SELECT * FROM stranka WHERE id=?");
        $prikaz->execute(array($this->id));
        $vysledek = $prikaz->fetch();
        
        if ($vysledek == false) {
            $obsah = "";
        }else{
            $obsah = $vysledek["obsah"];
        }

        //$obsah = file_get_contents("./$this->id.html");
        return $obsah;
    }

    function setObsah($argNovyObsah) {
        $prikaz = $GLOBALS["instanceDB"]->prepare("UPDATE stranka SET obsah=? WHERE id=?");
        $prikaz->execute(array($argNovyObsah, $this->id));
        
        //file_put_contents("./$this->id.html", $argNovyObsah);
        return;
    }

    function ulozDoDb() {
        if ($this->oldId == "") {
            //jeste predtim nez udelame insert, tak musime zjsitit nejvyssi hodnotu poradi
            $prikaz = $GLOBALS["instanceDB"]->prepare("SELECT MAX(poradi) AS max_poradi FROM stranka");
            $prikaz->execute();
            $maxPoradi = $prikaz->fetch()["max_poradi"];
            $maxPoradi += 1;

            //vlozime stranku do DB
            $prikaz = $GLOBALS["instanceDB"]->prepare("INSERT INTO stranka SET id=?, titulek=?, menu=?, obrazek=?, poradi=?");
            $prikaz->execute(array($this->id, $this->titulek, $this->menu, $this->obrazek, $maxPoradi));
        }else{
            $prikaz = $GLOBALS["instanceDB"]->prepare("UPDATE stranka SET id=?, titulek=?, menu=?, obrazek=? WHERE id=?");
            $prikaz->execute(array($this->id, $this->titulek, $this->menu, $this->obrazek, $this->oldId));
        }
    }

    function smazSe() {
        $prikaz = $GLOBALS["instanceDB"]->prepare("DELETE FROM stranka WHERE id=?");
        $prikaz->execute(array($this->id));
    }


}//endStranka


//vytahneme si vsechny stranky z DB
$prikaz = $instanceDB->prepare("SELECT * FROM stranka ORDER BY poradi");
$prikaz->execute(array());
$poleVysledkuDB = $prikaz->fetchAll(PDO::FETCH_ASSOC);

//z vysledku DB vytvorime pole instanci
$poleStranek = array();
foreach ($poleVysledkuDB AS $stranka) {
    $poleStranek[$stranka["id"]] = new Stranka($stranka["id"], $stranka["titulek"], $stranka["menu"], $stranka["obrazek"]);
}


/*
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
*/