<?php
$jmeno = "";
$vek = "";
$pohlavi = "";
$chybaJmena = "";
$chybaVeku = "";
$chybaPohlavi = "";

//zpracujeme prihalsovaci formular 
if (array_key_exists("prihlasit-submit", $_POST)) {
    //vytahneme si z postu hodnoty, ktere vyplnil uzivatel
    $jmeno = $_POST["jmeno"];
    $vek = $_POST["vek"];
    $pohlavi = $_POST["pohlavi"];

    //validace pomoci if hlidacu (guarding clause)
    //nazacatku nez vas budou kontorlvat tak jste validni
    $validni = true;

    //prvni hlidac kontorluje jmeno
    if (is_numeric($jmeno)) {
        $chybaJmena = "Vase jmeno nemsi byt cislo.";
        $validni = false;
    }else if (mb_strlen($jmeno) < 3) {
        $chybaJmena = "Vase jmeno je moc kratke.";
        $validni = false;
    }

    //druhy hlidac kontorluje vek
    if (!is_numeric($vek)) {
        $chybaVeku = "Vas vek neni cislo.";
        $validni = false;
    }else if ($vek < 18) {
        $chybaVeku = "Jste moc mlady.";
        $validni = false;
    }

    //treti hlidac kontorluje pohlavi
    if ($pohlavi != "muz") {
        $chybaPohlavi = "Do klubu gentelmanu mohou vstoupit pouze muzi.";
        $validni = false;
    }

    //na konci pokud jste zustali true, tak jste prosli vsemi testy
    if ($validni == true) {
        $uspesnaZprava = "Vse probehlo OK. Muzete vstoupit.";
    }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validace formulare</title>
</head>
<body>
    <h1>Validace formulare</h1>

    <?php
    if (isset($uspesnaZprava)) {
        echo "<p>$uspesnaZprava</p>";
    }else{
        ?>
        <form action="" method="post">
            <label for="">Jmeno: </label>
            <input type="text" name="jmeno" id="" value="<?php echo $jmeno; ?>">
            <?php echo $chybaJmena; ?>
            <br>
            <label for="">Vek: </label>
            <input type="text" name="vek" id="" value="<?php echo $vek; ?>">
            <?php echo $chybaVeku; ?>
            <br>
            <label for="">Pohlavi: </label>
            <select name="pohlavi" id="">
                <!-- ternarni operator je jiny zapis sturktury if else -->
                <option value="" <?php echo ($pohlavi == "") ? "selected" : ""; ?>>Vyberte</option>
                <option value="muz" <?php echo ($pohlavi == "muz") ? "selected" : "" ?>>Muž</option>
                <option value="zena" <?php echo ($pohlavi == "zena") ? "selected" : "" ?>>Žena</option>
                <option value="jine" <?php echo ($pohlavi == "jine") ? "selected" : "" ?>>Jiné</option>
            </select>
            <?php echo $chybaPohlavi; ?>
            <br>
            <input type="submit" name="prihlasit-submit" value="Prihlasit se do klubu gentelmanu">
        </form>
        <?php
    }

    ?>


    
</body>
</html>