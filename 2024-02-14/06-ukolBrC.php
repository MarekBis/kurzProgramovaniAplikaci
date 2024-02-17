<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol break continue</title>
</head>
<body>
    <h1>Ukol break a continue</h1>

    <?php
    echo "<hr>";
    while(true){
        $kostka1=rand(1,6);
        $kostka2=rand(1,6);
        echo "Kostka 1: $kostka1";
        echo '<br>';
        echo "Kostka 2: $kostka2";
        if ($kostka1 == $kostka2){
            echo "<br>";
            echo "<br>";
            echo "Kostkam padlo stejne cislo.";
            echo "<hr>";
            break;
        }else{
            echo "<hr>";
            continue;
        }
    }
    ?>
    
</body>
</html>