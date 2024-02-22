<?php
class Zvire {
    public $jmeno;
    //tyto dve vlasntosti se chovaji stejne
    //rozdil je az pri podedeni
    //protected se podedi, tak ze potomek ma prava vlastnost cist a menit
    //private podedi vlasntost ale potomek s tim nesmi nic delat
    private $idZvirete;
    protected $vybeh;

    function __construct($argJmeno, $argId, $argVybeh)
    {
        $this->jmeno = $argJmeno;
        $this->idZvirete = $argId;
        $this->vybeh = $argVybeh;
    }

    function setVybeh($argNovyVybeh) {
        //diky setteru mate moznost pred zmenout hodnoty udelat jeste nejakou validaci

        $this->vybeh = $argNovyVybeh;
        return;
    }

    function getVybeh() {
        //diky getter muzete nejprve udelat nejakjy operace, nez vysledek vydate

        return $this->vybeh;
    }

}//endZvire




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public, private, protected</title>
</head>
<body>
    <h1>Public, private, protected</h1>
    <?php
    $zvire1 = new Zvire("tygr", 48797, "dzungle");

    //toto muzeme delat jen protoze vlastnost je public
    //kdyby to bylo privtae nebo protected tak oboji vyhodi chybu
    echo $zvire1->jmeno; //tygr
    $zvire1->jmeno = "opice"; //zmenili jsme tygra na opici

    //chcme oipici prestehovat do opicarny
    //$zvire1->vybeh = "opicarna" //dotaneme chybu
    //musime opicku prestehovta skrze setter
    $zvire1->setVybeh("opicarna");
    var_dump($zvire1);
    echo $zvire1->getVybeh();
    ?>
</body>
</html> 