<?php
//abstraktni classa nemuze vytvraet objekty, slouzi pouze k podedeni 
abstract class Uzivatel {
    //zde uvedeme vlasntosit spolecne pro studenta i ucitele
    public $jmeno;
    public $adresa;

    function __construct($argJmeno, $argAdresa)
    {
        $this->jmeno = $argJmeno;
        $this->adresa = $argAdresa;
    }

    //setter je funkce, ktera zmeni hodnotu vlastnosti
    //narozdil od prime zmeny vlasntosti je zde mozne hodnoty validovat, nez se neco zapise
    function setAdresa ($argNovaAdresa, $argObrazek) {
        //validace
        if (is_numeric($argNovaAdresa)) {
            return "Adresa nesmi byt ciste ciselna.";
        }

        //validace zda adresa na obrazku souhlasi se zadanou adresou
        if ($argObrazek == null) {
            return "Musite prilozit obrazek, pro kontorlu.";
        }

        //uzivtael prosel vsemi testy, muzeme mu v klidu zmenit adresu
        $this->adresa = $argNovaAdresa;

    }

    //kdyz je classa abstraktni, tak muzeme definovat i abstraktni funkce
    //abstraktni funkce rika, ze kazdy potomek musi tuto funkci mit, ale rodicovske classe je jedno co bude funkce delat
    abstract function pozdravMe();

}//endUzivatel

//DEDENI

class Student extends Uzivatel {
    //zde vytvorime vlasntosit unikatni jen pro studenta
    public $rocnik;
    public $obor;

    //pokud by student nemel construktor, tak pri vytvroeni instance se pouzije construktor rodice
    //pokud consturktor studenta nadefinujeme, tak musime jeste rict, ze chceme pouzit i consturktor uzivatele, protoze tam jsou jmena a adresy

    function __construct($argJmeno, $argAdresa, $argRocnik, $argObor) {
        //zde volame consturktor rodice
        //dva argumenty patri rodicovske classe
        parent::__construct($argJmeno, $argAdresa);
        //dva argumenty patri studentovi
        $this->rocnik = $argRocnik;
        $this->obor = $argObor;
    }

    //funkce unikatni pro studenta
    function postupDoDalsihoRocniku() {
        if ($this->rocnik == 3) {
            return "Dalsi rocnik uz neexistuje";
        }

        $this->rocnik += 1;
    }

    function pozdravMe() {
        return "Ahoj $this->jmeno";
    }

}//endStudent

class Ucitel extends Uzivatel {
    public $plat;

    function __construct($argJmeno, $argAdresa, $argPlat)
    {
        parent::__construct($argJmeno, $argAdresa);

        $this->plat = $argPlat;
    }

    //toto je metoda unikatni pro ucitele
    function pridejMi ($argPridavek) {
        if (!is_numeric($argPridavek)) {
            return "Pridavek musi byt cislo";
        }

        $this->plat += $argPridavek;
    }

    function pozdravMe() {
        return "Dobry den $this->jmeno";
    }

}//endUcitel
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dedeni</title>
</head>
<body>
    <h1>Dedeni</h1>


    <?php
    
    $student1 = new Student("Tony", "Jablonskeho 2", 3, "programovani");
    $student2 = new Student("Kuba", "Mlynska 2", 1, "programovani");
    $student2->setAdresa("Hradni 8", ".......");
    var_dump($student2);

    //toto nelze udela tproze classa je abstraktni
    //$uzivatel1 = new Uzivatel("Pepa", "Mochomurkova 17");

    ?>
</body>
</html>