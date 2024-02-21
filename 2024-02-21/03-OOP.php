<?php
//abychom mohli vytvorit objekt, tak je treba mit nejprve vytvorenou tridu (class)
//php class a html class jsou 2 odlisne veci

//class je v OOP neco jako tovarna
//z teto tovarny se pak vytvareji objekty, kterym rikame instance
class Fixa {
    //sem uvedem sadu vlastnosti, kterou ty insatnce budou mit
    public $barva;
    public $maxObjem;
    public $stav;
    public $tloustka;
    //staticka vlasnost nepatri instanci, patri tride
    static public $pocetFix = 0;
    static public $vydelekZaKus = 30;

    //toto je funkce, ktere se rika konstruktor
    //konstruktor se automaticky zavola pri vytvoreni nove instance
    function __construct($argBarva, $argMaxObjem, $argStav, $argTloustka) {
        //tento konstruktor budeme pouzivat k tomu abychom naplnili vlastnosti nejakymi daty
        $this->barva = $argBarva;
        $this->maxObjem = $argMaxObjem;
        $this->stav = $argStav;
        $this->tloustka = $argTloustka;

        //navysime pocet celkovych fix
        //u staticke vlasnosti se neda pouzit $this->
        Fixa::$pocetFix += 1;
    }

    //staticka metoda
    static function kolikVydelalaFirma () {
        return Fixa::$pocetFix * Fixa::$vydelekZaKus;
    }


    //sem vytvorime nove funkce, ktere ty fixy budou pouzivat
    //pokud jsme uvnitr classy, tak se funkci rika METODY
    function napis($argText) {
        //kazdy znak bude fixu stat 0.87 inkoustu
        $spotreba = strlen($argText) * 0.87;

        if ($this->stav < $spotreba) {
            return "<p>Tato fixa nema dost inkoustu.</p>";
        }

        $this->stav -= $spotreba;
        return "<p style='color: $this->barva; font-size: {$this->tloustka}px'>$argText</p>";
    }

    function naplnSe($argInkoust) {
        $this->stav += $argInkoust;
        if ($this->stav > $this->maxObjem) {
            //zastorpime stav na max objem
            $this->stav = $this->maxObjem;
        }
    }

} //endFixa


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <h1>OOP</h1>

    <?php
    //nova instance tridy se vytvari pomoci slova new NazvuTridy a ()
    $instance = new Fixa("red", 200, 20, 20);
    var_dump($instance);
    echo $instance->barva; //red

    //vytovrim si 4 ruzne fixy a ulozim si jejich insatnce do pole
    $poleInstanci = array();
    $poleInstanci[] = new Fixa("blue", 120, 120, 10);
    $poleInstanci[] = new Fixa("green", 60, 0, 10);
    $poleInstanci[] = new Fixa("red", 150, 140, 30);
    $poleInstanci[] = new Fixa("pink", 50, 50, 15);

    var_dump($poleInstanci);
    //objekty jsou vlastne hodne podobny polim
    //muzete hodnoty vypsat, zmenit
    
    echo $poleInstanci[2]->tloustka; //30
    echo "<br>";
    echo $poleInstanci[3]->barva; //pink
    echo "<br>";
    //Fixa s barvou xxx ma maximalni objem xxxml.
    echo "Fixa s barvou {$poleInstanci[0]->barva} ma maximalni objem {$poleInstanci[0]->maxObjem}ml.";

    echo "<br>";
    echo $poleInstanci[1]->napis("Ahoj!");
    echo $poleInstanci[3]->napis("Ahoj!");
    echo $poleInstanci[2]->napis("Ahoj!");
    var_dump($poleInstanci[3]);

    //naplnime fixu 15 inkousty
    $poleInstanci[1]->naplnSe(15);
    var_dump($poleInstanci[1]);
    $poleInstanci[1]->naplnSe(1500);
    var_dump($poleInstanci[1]);

    //timto zpusobem jsme zmenili hodnotu vlasntosti, te dane fixy
    //NEDELA SE
    $poleInstanci[0]->barva = "orange";
    echo $poleInstanci[0]->napis("Mam novou barvu!");


    //staticke vlastnosti a metody se pouzivaji se ::
    var_dump(Fixa::$pocetFix); //5
    var_dump(Fixa::kolikVydelalaFirma()); //150

    ?>

</body>
</html>