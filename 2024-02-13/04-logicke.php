<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logické operátory</title>
</head>
<body>
    <h1>Logické operatory</h1>

    <?php
    //zatimco porovnavaci operatory prijimaly 2 hodnoty a vracely boolean
    //tak logicke operetory prijimaji 2 booleany a vraci jedeno novy boolean

    //logika AND
    //pokud oba dva booleany jsou true, tak je vysledkem taky true
    var_dump(true && true); //true
    var_dump(true && false); //false
    var_dump(false && true); //false
    var_dump(false && false); //false

    //logika OR
    //pokud alepson jeden boolean je true, pak je vysledek true
    var_dump(true || true); //true
    var_dump(true || false); //true
    var_dump(false || true); //true
    var_dump(false || false); //false

    //logicke operatory se casto kombinuji s porovnavacima operatorama
    $vek = rand(1, 100);
    var_dump(5 > 2+2 || $vek >= 18); //zde vubec nezalezi na veku, protoze leva strana je true, logika je OR a teto logice staci jeden boolean true

    //strlen() je funkce ktera nam zjsiti pocet znaku ve stringu
    echo strlen("kocka"); //5

    $zvire = "pes";
    echo "<br>";
    echo var_dump(5 < strlen($zvire) + 2 || 7%3 == strlen($zvire) -2);
    ?>

</body>
</html>