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
    $cislo = rand(0, 5);
    echo "$cislo";
    echo "<br>";

    if ($cislo == 0) {
        echo "Nula";
    } else if ($cislo % 2 == 0) {
        echo "Sude";
    } else {
        echo "Liche";
    }
    


    $pohlavi;
    $vek;


    
    ?>
</body>

</html>