<?php
    if (array_key_exists("submit-kolecka",$_POST)){
        $pocetKolecek = $_POST["pocet-kolecek"]:
        echo $pocetKolecek;
    }


?>



<!-- formular, kam uzivatel zada nejake cislo  -->
<!-- vygenerujte mu zadany pocet kolecek kazde kolecko bude mit nahodnou barvu -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ukol</h1>
    <form action="" method="post">
        <label for="">Zadejte pocet kolecek: </label>
        <input type="number" name="pocet-kolecek" id="">
        <input type="submit" name="submit-kolecka" value="Odeslat">
    </form>
    
</body>
</html>