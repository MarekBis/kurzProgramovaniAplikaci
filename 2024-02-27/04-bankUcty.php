<?php
//spojeni PHP s DATABAZI
$instanceDB = new PDO(
    "mysql:host=127.0.0.1:3306;dbname=banka;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

//zpracovani formulare pro vytvoreni noveho uctu
if (array_key_exists("ucet-submit", $_POST)) {
    $cisloUctu = $_POST["cislo-uctu"];
    $majitel = $_POST["majitel"];
    $stav = $_POST["stav"];

    //zapsat do DB
    $prikaz = $instanceDB->prepare("INSERT INTO ucet SET cislo_uctu=?, majitel=?, stav=?");
    $prikaz->execute(array($cisloUctu, $majitel, $stav));
    //protoze delam insert, tak neni co fetchovat
}

//zpracovani prevodu penez
if (array_key_exists("prevod-submit", $_POST)) {
    $odesilatel = $_POST["odesilatel"];
    $prijemce = $_POST["prijemce"];
    $castka = $_POST["castka"];

    //method chaining
    //na jedne instanci zavolate nekolik metod za sebou, nemusite tedy kazdy vysledek ukladat do promenne
    $instanceDB->prepare("START TRANSACTION")->execute();

    $prikaz = $instanceDB->prepare("UPDATE ucet SET stav=stav-? WHERE cislo_uctu=?");
    $prikaz->execute(array($castka, $odesilatel));
    
    
    $prikaz = $instanceDB->prepare("UPDATE ucet SET stav=stav+? WHERE cislo_uctu=?");
    $prikaz->execute(array($castka, $prijemce));

    $instanceDB->prepare("COMMIT")->execute();
}




//vypis vsech uctu
$prikaz = $instanceDB->prepare("SELECT * FROM ucet");
$prikaz->execute(array());
$poleVysledku = $prikaz->fetchAll(PDO::FETCH_ASSOC);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol</title>
</head>
<body>
    <h1>Ukol</h1>

    <!-- sem vypsat tabulku bankovnich uctu -->
    <table border="1px solid">
        <tr>
            <td>Cislo Uctu</td>
            <td>Majitel</td>
            <td>Stav</td>
        </tr>
    <?php
    foreach ($poleVysledku AS $ucet) {
        echo "<tr>
            <td>{$ucet["cislo_uctu"]}</td>
            <td>{$ucet["majitel"]}</td>
            <td>{$ucet["stav"]}</td>
        </tr>";
    }
    ?>
    </table>
    <br>
    <!-- vytovrit formular, ktery vytvori novy ucet -->
    <form action="" method="post">
        <label for="">Cislo uctu: </label>
        <input type="number" name="cislo-uctu" id="">
        <br>
        <label for="">Majitel: </label>
        <input type="text" name="majitel" id="">
        <br>
        <label for="">Stav: </label>
        <input type="number" name="stav" id="">
        <br>
        <input type="submit" name="ucet-submit" value="Vytvorit novy ucet">
    </form>

    <hr>

    <form action="" method="post">
        <label for="">Cislo odesilatele</label>
        <input type="number" name="odesilatel" id="">
        <br>
        <label for="">Cislo prijemce</label>
        <input type="number" name="prijemce" id="">
        <br>
        <label for="">Castka</label>
        <input type="number" name="castka" id="">
        <br>
        <input type="submit" name="prevod-submit" value="Odeslat penize">
    </form>
</body>
</html>