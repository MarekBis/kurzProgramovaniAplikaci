<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetveni programu</title>
</head>

<body>
    <h1>Vetveni programu</h1>

    <?php
    $zaverecnyTest = rand(0, 100);
    echo "Naspali jste test na $zaverecnyTest bodu.";
    echo "<br>";

    //pokud student naspal test na vice naz 80 bodu, tak uspesne dokoncil predmet
    //pokud student test nesplnil, ale ma alepson 50 bodu, tak muze test opakovat
    //studenti, kteri nemaji ani 50 bodu nemohou se studiem pokracovat

    //do kulate zavorky se da nejaky vyraz, ktery vyjde bud true nebo false
    //pokud vyjde vyraz true, tak se provede kod, ktery je napsany v {}
    if ($zaverecnyTest >= 80) {
        echo "Predmet byl splnen. Muzes pokracovat do dalsiho rocniku.";
        echo "<br>";
    } else if ($zaverecnyTest >= 50) {
        echo "Bohuzel jsi test nesplnil. Mas vsak moznost test opakovat.";
        echo "<br>";
    } else {
        echo "Bohuzel jsi nesplnil ani minimum pro opakovani. Musíš ukončit studium.";
        echo "<br>";
    }


    if ($zaverecnyTest < 50) {
        echo "Bohuzel jsi nesplnil ani minimum pro opakovani. Musíš ukončit studium.";
    } else if ($zaverecnyTest < 80) {
        echo "Bohuzel jsi test nesplnil. Mas vsak moznost test opakovat.";
    } else {
        echo "Predmet byl splnen. Muzes pokracovat do dalsiho rocniku.";
    }

    echo "<br>";

    if ($zaverecnyTest < 50) {
        echo "Bohuzel jsi nesplnil ani minimum pro opakovani. Musíš ukončit studium.";
        echo "<br>";
    } else if ($zaverecnyTest >= 80) {
        echo "Predmet byl splnen. Muzes pokracovat do dalsiho rocniku.";
        echo "<br>";
    } else {
        echo "Bohuzel jsi test nesplnil. Mas vsak moznost test opakovat.";
        echo "<br>";
    }


    $rokNarozeni = 2009;
    if ($rokNarozeni == 2000) {
        echo "Narodili jste se v roce 2000.";
    } else {
        echo "Nenarodili jste se v roce 2000.";
    }


    ?>


</body>

</html>