<?php
$instanceDB = new PDO(
    "mysql:host=localhost;dbname=primakurzy;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

//posleme do DB nejaky SQL kod
//1) pripravit prikaz
//2) vlozit do prikazu parametry a spustit
//3) data vytahnout z vysledku ven

// $prikaz = $instanceDB->prepare("SELECT * FROM zeme WHERE mena=? AND kontinent=?");
// $prikaz->execute(array('EUR','Evropa'));

$prikaz = $instanceDB->prepare("SELECT * FROM zeme");
$prikaz->execute(array());
//$poleVysledku = $prikaz->fetch(); //toto vrati prvni nalezeny stat
$poleVysledku = $prikaz->fetchAll(PDO::FETCH_ASSOC); //vsechyn nalezene staty
// var_dump($poleVysledku);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Databaze</title>
</head>
<body>
    <h1>PHP DATABASE</h1>

    <ul>
        <?php
        foreach ($poleVysledku as $stat){
            echo "<li>{$stat['nazev_cesky']} --- {$stat['mena']}</li>";
        }
        ?>
    </ul>

</body>
</html>