<?php
//pripojist se k databazi
$instanceDB = new PDO(
    "mysql:host=127.0.0.1:3306;dbname=primakurzy;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);


//server nevi, ze komunikuje s AJAXEM
//server to zpracovava jako obycejny formular POST
if (array_key_exists("statySubmit", $_POST)) {
    $pocet = $_POST["pocet"];
    $zobrazeno = $_POST["zobrazeno"];

    //pro LIMIT nefungujou ?
    $prikaz = $instanceDB->prepare("SELECT * FROM zeme LIMIT :zobrazeno, :pocet");
    $prikaz->bindParam(":zobrazeno", $zobrazeno,PDO::PARAM_INT);
    $prikaz->bindParam(":pocet", $pocet,PDO::PARAM_INT);
    $prikaz->execute();
    $poleVysledku = $prikaz->fetchAll(PDO::FETCH_ASSOC);

    //php potrebuje infarmace AJAXU poslat v nejakou spolecnem formatu
    //json_decode() //prevede string na pole podle JSON pravidel
    //json_encode() //prvede pole na string podle JSON pravidel

    $stringVysledku = json_encode($poleVysledku);

    //tento sltring posleme Ajaxu
    //posila se to echem
    echo $stringVysledku;
    exit; //rika ze odpoved zde konci
}