<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Break a Continue</title>
</head>
<body>
    <h1>Break a continue</h1>

    <?php
    //tento cyklus bude nekonecne generovat nahodna cisla
    while (true) {
        $cislo = rand(0, 50);
        echo $cislo;
        echo "<br>";

        if ($cislo == 42) {
            //pokud zjistime ze vygenerovane cislo je 42, tak cyklus prikazem break ukoncime
            break;
            echo "Toto nikdo nikdy neuvidi";
        }

    }

    echo "<hr>";

    //alternativni zpusob jak toto vyresit bez prikazu break
    $cislo = rand(0, 50);
    while($cislo != 42) {
        $cislo = rand(0, 50);
        echo $cislo;
        echo "<br>";
    }
    
    echo "<hr>";

    //vypsite cisla 0-20
    //vynechejte cisla delitelna 3 nebo 5
    for ($i = 0; $i <= 20; $i++) {

        if ($i%3 == 0 || $i%5 == 0) {
            //tento prikaz ukonci aktualni kolo a prejde do dalsiho kola cyklu
            continue;
        }

        echo $i;
        echo "<br>";
    }


    ?>
</body>
</html>