<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aritmeticke operatory</title>
</head>
<body>
    <h1>Aritmeticke operatory</h1>

    <?php
    //datovy typ integer
    $rokNarozeni = 1992;
    //datovy typ float/double
    $venkovniTeplota = 7.6;

    //+, -, /, *, %
    echo 8 + 7;
    echo "<br>";
    echo 8 - 7;
    echo "<br>";
    echo 8 / 7;
    echo "<br>";
    echo 8 * 7;
    echo "<br>";

    //operatory maji urcitou prioritu
    echo 8 + 2 * 3; //14
    echo "<br>";
    echo (8 + 2) * 3; //30
    echo "<br>";

    //modulo - vysledekm modula je zbytek po celociselnem deleni
    echo 7%3; //1
    echo "<br>";
    echo 8%3; //2
    echo "<br>";
    echo 9%3; //0
    echo "<br>";
    echo 10%3; //1
    echo "<br>";
    echo 11%3; //2
    echo "<br>";

    echo 4%2; //0
    echo "<br>";
    echo 5%2; //1
    echo "<br>";
    echo 6%2; //0
    echo "<br>";
    echo 7%2; //1
    echo "<br>";

    echo 4%7; //4
    echo "<br>";

    ?>


</body>
</html>