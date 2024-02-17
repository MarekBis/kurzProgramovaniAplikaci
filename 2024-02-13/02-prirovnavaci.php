<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prirovnávací operatory</title>
</head>
<body>
    <h1>Přirovnávací operatory</h1>

    <?php
    $kredity = 100;

    //chceme uzivateli pridat do promenne 30 kreditu navic
    $kredity += 30;
    echo $kredity; //130
    echo "<br>";

    //chcememu pridat dalsich 50
    $kredity += 50;
    echo $kredity; //180
    echo "<br>";

    //uzivtael si koupil nejakou vec za 100 kreditu, tak mu musime stav kreditu snizit
    $kredity -= 100;
    echo $kredity; //80
    echo "<br>";

    //uzivatel ziskal bonus zdvojnasobime mu jeho kredity
    $kredity *= 2;
    echo $kredity; //160
    echo "<br>";

    $score = rand(0, 50);
    $score += 10; //uzivatel ziskal 10 bodu
    $score -= 5; //uzivatel ztratil 5 bodu
    $score += 15; //uzivatel ziskal 15 bodu

    //alternativni zapisy
    //tyto zapisy jsou stejne(ekvivalentni)
    $score += 20;
    $score = $score + 20;

    //++ a --
    //tyto operatory upravuji hodnotu v promenne o 1
    $vek = 14;
    $vek++;
    $vek++;
    $vek++;
    echo $vek; //17
    echo "<br>";

    $vek--;
    $vek--;
    echo $vek; //15
    echo "<br>";
    ?>


</body>
</html>