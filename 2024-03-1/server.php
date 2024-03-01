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
}