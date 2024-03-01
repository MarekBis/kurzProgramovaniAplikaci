<?php
$instanceDB = new PDO(
    "mysql:host=localhost;dbname=primakurzy;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

if(array_key_exists("statySubmit",$_POST)){
    $pocet = $_POST["pocet"];
    $zobrazeno = $_POST["zobrazeno"];
    $prikaz= $instanceDB->prepare("SELECT * FROM zeme LIMIT $zobrazeno,$pocet");
    $prikaz->execute(array());
    $poleVysledku = $prikaz->fetchAll(PDO::FETCH_ASSOC);

    //php potrebuje infarmace AJACU poslat v nejakou spolecnem formatu
    //json_decode() //prevede string na pole podle JSON pravidel
    //json_encode() //prvede pole na string podle JSON pravidel

    $stringVysledku = json_encode($poleVysledku);
    //tento sltring posleme Ajaxu
    //posila se to echem
    echo $stringVysledku;
    exit; //rika ze odpoved zde konci
}