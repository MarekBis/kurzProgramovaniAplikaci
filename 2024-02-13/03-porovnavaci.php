<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porovnavaci operatory</title>
</head>

<body>
    <h1>Porovnavaci operatory</h1>

    <?php
    //novy datovy typ BOOLEAN
    //tento datovy typ muze mit pouze hodnotu true nebo false
    $jePlnolety = true; //pravda, ano, pozitivni, soulasi, plati
    $jeZenaty = false; //nepravda, ne, negativni, nesouhlasi, neplati

    //!!!echo umi vypsat do obrzavky jenom stringy a cisla
    echo $jePlnolety; //pokud je boolean true, tak echo vypise 1
    echo "<br>";
    echo $jeZenaty; //pokud je boolean flase, tak echo nevypise nic
    echo "<br>";

    //vysledkem porovnavaciho operatoru je nejakho hodnota booleanu
    var_dump($jeZenaty);

    //vysledkem porovnavaciho operatoru je nejakho hodnota booleanu
    // ==, >, <, !=, >=, <=, ===, !==
    //toto zde zjsitujeme zda 6 je vetsi nez 5+3
    var_dump(6 > 5 + 3); //false
    //dve rovnitka se pouzivaji pro zjisteni shody
    var_dump(5 == 2 + 3); //true

    //timto operatorm zjsitime zda se hodnoty nerovnaji
    //5 se nerovna 2+3, vysledkem je 
    var_dump(5 != 2 + 3); //false
    var_dump(5 != 20 + 3); //true

    //rozdil mezi == a ===
    var_dump("40" == 40); //true
    var_dump("40" === 40); //false, toto navic kontorluje i shodu datoveho typu
    

    ?>

</body>

</html>