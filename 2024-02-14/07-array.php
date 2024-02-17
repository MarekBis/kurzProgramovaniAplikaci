<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    //prommenne mohouv osbe mit je jednu hodnotu
    $barva = "ruzova";
    //timto jsme ruzovou smazali a nahradili ji zelenou
    $barva = "zelena";

    //pokud bychom potrebovali premnou, pro vice hodnot, tak pouzijeme array(pole)
    //v PHP jsou 2 zpusoby jak vytvorit array
    //1) pomoci []
    $poleZelenina = ["celer", "mrkev", "cuketa", "brambora", "okurka", "rajce"];
    //2) pomoci funkce
    $poleOvoce = array("jablko", "pomeranc", "citron");

    echo $poleZelenina[2]; //cuketa
    echo "<br>";

    //"Lektor Tony ma rad xxx a xxx."
    echo "Lektor Tony ma rad $poleZelenina[3] a $poleOvoce[1].";

    //chci zmenit pomeranc za mango
    $poleOvoce[1] = "mango";


    //cvicne mi nahradte okurku za cibuli
    $poleZelenina[4] = "cibule";

    //chci pridat do pole ovoce ananas
    //nova hodnota se vzdy zaradi na konec pole
    $poleOvoce[] = "ananas";

    //chceme odstranit z pole hodnotu mrkev
    //toto odstrani hodnotu i index
    //v poli pak vzniknou "diry"
    unset($poleZelenina[1]);
    var_dump($poleZelenina);

    //pokud vlozime novou hodnotu, tak se diry nezaplni, nova hodnota se vzdy vlozi na konec pole
    $poleZelenina[] = "hrasek";

    //muzete natvrdo do diry zapsat novou hodnotu
    $poleZelenina[1] = "lilek";
    var_dump($poleZelenina);

    $barvy = [];
    $barvy[] = 'zluta';
    $barvy[] = 'zelena';
    $barvy[] = 'modra';
    $barvy[1]='oranzova';
    $barvy[]='bila';
    unset($barvy[2]);
    echo $barvy[3];
    var_dump($barvy);
    
    //15.02
    //keys
    $poleLektor = [
        "jmeno" => "Tony",
        "email" => "tonda.truong@primakurzy.cz",
        "odpracovane roky" =>8,
        "aktivni" => false,
        "predmety" => ["programovani", "frontend"]
    ];
    var_dump($poleLektor);
    echo "Lektor {$poleLektor["jmeno"]} uci {$poleLektor["predmety"][1]}";

    $mobil = [
        "znacka" => "apple",
        "pamet" => "128",
        "nfc" => true,
        "zabezpeceni" => ["faceid", "otisk"]
    ];
    var_dump($mobil);
    
    ?>

</body>
</html>