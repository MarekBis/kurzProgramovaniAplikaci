<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>ukol</h1>
    <?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet deleniti voluptates ad maiores esse, quisquam magni placeat perspiciatis tenetur expedita sit nemo sunt. Tenetur, eligendi laudantium! Excepturi sapiente vel dolores.";

    $textBez = str_replace(array("!",".","?"),"",$text);
    
    $poleSlov = explode(" ",$textBez);
    
    $pocetSlov = count($poleSlov);

    var_dump($poleSlov);
    echo "Pocet slov je: $pocetSlov <br>";
    echo "Posledni slovo je: {$poleSlov[$pocetSlov-1]}";

    
    ?>
    
</body>
</html>