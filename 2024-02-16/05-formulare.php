<?php

    //toto jsou pole, do kterych se zapisou formularova data
    var_dump($_POST);
    var_dump($_GET);
    var_dump($_REQUEST);

    //napiseme if, ktery se pusti jen pokud byl odeslany formular registrace
    //array_key_exists() je funkce, ktera vraci boolean
    //tato funkce zjisti zda v danem poli existuje hledany klic
    if (array_key_exists("registrace-submit", $_POST)) {
        echo "Toto se vypise jen pokud uzivatel odeslal formular";

        $jmeno = $_POST["jmeno-uzivatele"];
        $email = $_POST["email-uzivatele"];
        $rokNarozeni = $_POST["rok-narozeni"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulare</title>
</head>
<body>
    <h1>Formulare</h1>
    <!-- form:post -->
    <!-- action je atribut, ktery rika kam se maji vyplnena data poslat -->
    <!-- poku je action prazdne, tak se data poslou na aktualni URL stranky (v nasem pripade by se to poslalo do souboru 06-formulare.php) -->
    <form action="" method="post">
        <label for="">Jmeno: </label>
        <input type="text" name="jmeno-uzivatele" id="">
        <label for="">Rok narozeni: </label>
        <input type="number" name="rok-narozeni" id="">
        <label for="">Email: </label>
        <input type="email" name="email-uzivatele" id="">
        <br>
        <input type="submit" name="registrace-submit" value="Odeslat formular">
    </form>

    <?php
    if (array_key_exists("registrace-submit", $_POST)) {
        echo "<ul>";
            echo "<li>$jmeno</li>";
            echo "<li>$rokNarozeni</li>";
            echo "<li>$email</li>";
        echo "</ul>";
    }
    
    ?>

</body>
</html>