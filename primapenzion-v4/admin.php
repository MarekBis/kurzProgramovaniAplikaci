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
    if(array_key_exists("seraditSubmit",$_POST)){
        $poleSerazenychId = $_POST["poleId"];
        //staticka metoda volani:
        Stranka::seraditStranky($poleSerazenychId);
        echo "hotovo"; //odpoved pro ajax
        exit;//ukonceni odpovedi pro ajax
    }


    if(array_key_exists("delete",$_GET)){
        $idStranky = $_GET["delete"];
        $poleStranek[$idStranky]->smazSe();

        header("Location: ?");
        exit;
    }

    if(array_key_exists("new",$_GET)){
        $aktualniInstance = new Stranka("","","","");
    }

    //uzivatel chce editovat
    if (array_key_exists("edit", $_GET)) {
        //admin.php?edit=galerie
        $idStranky = $_GET["edit"];
        //z pole stranek si vytahneme ven jenom tu, kterou chceme editovat
        $aktualniInstance = $poleStranek[$idStranky];
    }

    //uzivatel chce stranku ulozit
    if (array_key_exists("aktualizovat-submit", $_POST)) {
        //vytahneme si metadata
        $idStranky = trim($_POST["id-stranky"]);
        $titulekStranky = $_POST["titulek-stranky"];
        $menuStranky = $_POST["menu-stranky"];
        $obrazekStranky = $_POST["obrazek-stranky"];

        //hlidac
        if ($idStranky == "") {
            //id nesmi byt prazdny string
            header("Location: ?");
            exit;
        }

        //nastvujme novy stav insatnce, ktery se pak propise do DB
        //ulozime si stare ID stranky
        $aktualniInstance->oldId = $aktualniInstance->id;
        //nastavime instanci nove hodnoty
        $aktualniInstance->id = $idStranky;
        $aktualniInstance->titulek = $titulekStranky;
        $aktualniInstance->menu = $menuStranky;
        $aktualniInstance->obrazek = $obrazekStranky;
        $aktualniInstance->ulozDoDb();


        $novyObsah = $_POST["obsah-stranky"];
        $aktualniInstance->setObsah($novyObsah);
        //presmerovat uzivtaele na novou url s novym ID
        header("Location: ?edit=$idStranky");
        exit;
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
        echo "<ul id='seznam-stranek'>";
        foreach ($poleStranek AS $stranka) {
            echo "<li id='$stranka->id'>
                <a href='?edit=$stranka->id'>
                    $stranka->id
                </a>
                |
                <a class='mazaci-odkaz' href='?delete=$stranka->id'>
                    [SMAZAT]
                </a>
            </li>";
        }
        echo "</ul>";

        echo "<a href='?new'>Vytvořit novou stránku</a>";

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
    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/jqueryui/jquery-ui.js"></script>
    <script src="./js/admin.js"></script>

    
</body>
</html>