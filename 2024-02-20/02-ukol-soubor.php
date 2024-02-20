<?php
if(array_key_exists("tel-cislo-submit",$_POST)){
    $cislo = $_POST["tel-cislo"];
    file_put_contents("./cisla.txt","$cislo\n", FILE_APPEND);
}
var_dump($_POST);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soubory</title>
</head>
<body>
        <!-- tvorte formular pro sber telefonich cisel -->
    <!-- uzvatel zada sve telefoni cislo a klikne na submit -->
    <!-- zapiste jeho telefoni cislo do souboru -->
    <!-- pod formularme bude UL seznam, kde budou vypsany vsehcny telefoni cisla, ktere jste nasbirali -->
    <!-- nemusite formular validovat a neresime duplicity -->
    <h1>Ukol</h1>
    <form action="" method="post">
        <label for="">TEL. cislo: </label>
        <input type="text" name="tel-cislo" id="">
        <input type="submit" value="Odeslat" name="tel-cislo-submit">
    </form>
    <?php
    if(file_exists("./cisla.txt")){
        $telefonniCisla = file_get_contents("./cisla.txt");
        $telefonniCisla = explode("\n",$telefonniCisla);
        var_dump($telefonniCisla);
        echo "<ul>";
        foreach($telefonniCisla as $cislo){
            if ($cislo == ""){
                continue;
            }
            echo "<li>$cislo</li>";
        }
        echo "</ul>";
    }
    ?>   
</body>
</html>