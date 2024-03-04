<?php
//NULL je hodonota, ktera reprezentuje "nic"
//datovy typ null s hodnotu null, tento datovy typ nema zadnou jinou hodnotu
$aktualniInstance = NULL;
session_start();
require_once "./data.php";

//prihlasovani
if (array_key_exists("login-submit", $_POST)) {
    $zadaneJmeno = $_POST["jmeno"];
    $zadaneHeslo = $_POST["heslo"];

    //overime spravndost udaju
    if ($zadaneJmeno == "admin" && $zadaneHeslo == "cici123") {
        $_SESSION["jePrihlasen"] = true;
    }
}

//odhlasovani
if (array_key_exists("logout-submit", $_GET)) {
    session_destroy();
    setcookie("PHPSESSID", "", time()-1, "/");
    header("Location: ?");
    exit;
}

if (array_key_exists("jePrihlasen", $_SESSION)) {
    //zde budou operace, ktere zpracujeme jen pokud je uzivatel prihlaseny

    //uzivatel chce editovat
    if (array_key_exists("edit", $_GET)) {
        //admin.php?edit=galerie
        $idStranky = $_GET["edit"];
        //z pole stranek si vytahneme ven jenom tu, kterou chceme editovat
        $aktualniInstance = $poleStranek[$idStranky];
    }

    //uzivatel chce stranku ulozit
    if (array_key_exists("aktualizovat-submit", $_POST)) {
        $novyObsah = $_POST["obsah-stranky"];
        $aktualniInstance->setObsah($novyObsah);
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin sekce</title>
</head>
<body>
    <h1>Admin sekce</h1>

    <?php
    if (array_key_exists("jePrihlasen", $_SESSION)) {
        ?>
        <form action="" method="get">
            <input type="submit" name="logout-submit" value="Odhlasit se">
        </form>
        <a href="?logout-submit">Odhlasit se</a>
        <?php

        //zde vypiseme seznam stranke, ktere uzivatel muze editovat
        echo "<h2>Seznam stranek</h2>";
        echo "<ul>";
        foreach ($poleStranek AS $stranka) {
            echo "<li>
                <a href='?edit=$stranka->id'>
                    $stranka->id
                </a>
            </li>";
        }
        echo "</ul>";

        if($aktualniInstance != NULL) {
            require "./komponenty/editor.php";
        }
        
    }else{
        ?>
        <form action="" method="post">
            <label for="">Jmeno:</label>
            <input type="text" name="jmeno" id="">
            <br>
            <label for="">Heslo:</label>
            <input type="password" name="heslo" id="">
            <br>
            <input type="submit" name="login-submit" value="Prihlasit se">
        </form>
        <?php
    }
    ?>

    
</body>
</html>