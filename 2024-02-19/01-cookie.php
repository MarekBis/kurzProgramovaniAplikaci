<?php
//toto je vychozi hodnota nadpisu
$barvaNadpisu = "black";

if(array_key_exists("barva-nadpisu",$_COOKIE)){
    $barvaNadpisu = $_COOKIE["barva-nadpisu"];
}
//pokud uzivatel odeslal formular, tak mu zmenit barvu nadpisu
if (array_key_exists("barva-nadpisu-submit", $_POST)) {
    $barvaNadpisu = $_POST["barva-nadpisu"];
    setcookie("barva-nadpisu",$barvaNadpisu,time()+60*60*7*24);
    header("Location: ?");
    exit;
}



//toto je pole, kde uvidime vsechny cookiny, ktere nam poslal client
var_dump($_COOKIE);
var_dump($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <style>
        body{
            background-color: grey;
        }
        h1 {
            color: <?php echo $barvaNadpisu; ?>;
        }
    </style>
    <h1>Cookie</h1>

    <form action="" method="post">
        <label for="">Zvolte barvu pro nadpis</label>
        <input type="color" name="barva-nadpisu" id="">
        <input type="submit" name="barva-nadpisu-submit" value="Nastavit">
    </form>
</body>
</html>