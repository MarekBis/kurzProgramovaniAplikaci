<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //ukol na doma
    //vytvorte prazdne pole, ktere nazvete $mojeCisla
    //napiste cyklus, ktery pole naplni 20 cisly, cisla budou nahodna 0-100
    //napiste dalsi cyklus, ktery zjisti celkovou sumu pole
    //napiste dalsi cyklus, ktery zjsiti nevjyssi hodnotu v poli (bez pouziti funkce sort/max/min)
    //reseni poslat na email: tonda.truong@primakurzy.cz

    $mojeCisla = [];

    for ($i = 0; $i < 20; $i++) {
        $mojeCisla[] = rand(0, 100);
    }

    var_dump($mojeCisla);

    $sumaCisel = 0;

    foreach ($mojeCisla as $cislo) {
        $sumaCisel += $cislo;
    }

    echo "Suma cisel v poli je: $sumaCisel";

    $max = $mojeCisla[0];

    foreach ($mojeCisla as $cislo) {
        if ($max < $cislo) {
            $max = $cislo;
        }
    }
    
    echo "<br>Maximalni hodnota seznamu je: $max";

    ?>

</body>

</html>