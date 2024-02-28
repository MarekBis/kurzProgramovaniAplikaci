<?php
$instanceDB = new PDO(
    "mysql:host=localhost;dbname=primakurzy;charset=utf8mb4",
    "root",
    "",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
);

$prikaz = $instanceDB->prepare("SELECT * FROM zeme");
$prikaz->execute(array());
$poleVysledku = $prikaz->fetchAll(PDO::FETCH_ASSOC);

if(array_key_exists("submit-nazev",$_GET)){
    $nazev= $_GET["cast-nazvu"];
    $prikazHledej = $instanceDB->prepare("SELECT * FROM zeme WHERE nazev_cesky LIKE ?");
    $prikazHledej->execute(array("%$nazev%"));
    $poleVysledku = $prikazHledej->fetchAll(PDO::FETCH_ASSOC);
}

var_dump($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>staty</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Zadej cast nazvu</label>
        <input type="text" name="cast-nazvu">
        <input type="submit" value="Vyhledat" name="submit-nazev">
    </form>
    <ul>
    <?php
        foreach ($poleVysledku as $stat){
            echo "<li>{$stat['nazev_cesky']}</li>";
        }
        ?>
    </ul>
    
</body>
</html>