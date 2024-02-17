<?php
    //zpravujeme formular vyber vetsi
    if (array_key_exists("vyber-vetsi-submit", $_GET)) {
        //kdyz odeslete GET formular, tak se informace inputu vlozi do URL stranky
        //vlozi se za otaznikem
        //parametry jsou oddelene ampersantem &

        //http://localhost/programator-unor/2024-02-16/08-formular-get.php?cislo-a=50&cislo-b=20&vyber-vetsi-submit=Vyber+vetsi
        $cisloA = $_GET["cislo-a"];
        $cisloB = $_GET["cislo-b"];

        if ($cisloA > $cisloB) {
            $vitez = $cisloA;
        }else{
            $vitez = $cisloB;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol post</title>
</head>
<body>
    <h1>formular GET</h1>
    <!-- vytvorte formular ktery bude mit 2 inputy, kma uzivatel zada cisla -->
    <!-- po odeslani formulare se mu pod formularem zobrazi cislo, ktere je vetsi -->

    <form action="" method="get">
        <label for="">Cislo A:</label>
        <input type="number" name="cislo-a" id="">
        <label for="">Cislo B:</label>
        <input type="number" name="cislo-b" id="">
        <br>
        <input type="submit" name="vyber-vetsi-submit" value="Vyber vetsi">
    </form>

    <p>Toto jsou 2 odkazy, ktere funguji jako get formular</p>
    <a href="?cislo-a=40&cislo-b=66&vyber-vetsi-submit">Tento odkaz porovna 40 a 66</a>
    <br>
    <a href="?cislo-a=87&cislo-b=12&vyber-vetsi-submit">Tento odkaz porovna 87 a 12</a>
    <br>

    <?php
    if (array_key_exists("vyber-vetsi-submit", $_GET)) {
        echo $vitez;
    }
    ?>

</body>
</html>