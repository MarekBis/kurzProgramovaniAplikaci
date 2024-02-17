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
    echo "<hr>";
    $poleCisel = [5, 8, 7, 9, 45, 12, 77, 64, 10, 3];
    echo "<b>Vypise seznam</b>";
    echo "<br>";
    foreach ($poleCisel as $cislo) {
        echo "$cislo <br>";
    }

    echo "<hr>";
    echo "<b>Vypise seznam pozpatku</b>";
    echo "<br>";

    for ($cislo = count($poleCisel) - 1; $cislo >= 0; $cislo--) {
        echo $poleCisel[$cislo];
        echo "<br>";
    }
    echo "<hr>";
    echo "<b>vypiste cyklem cisla ale jen ta suda</b>";
    echo "<br>";

    for ($cislo = 0; $cislo < count($poleCisel); $cislo++) {
        if ($poleCisel[$cislo] % 2 == 0) {
            echo "{$poleCisel[$cislo]} <br>";
        }
    }

    echo "<hr>";

    $poleBarvy = ["modra", "cervena", "zelena", "bila"];
    //vypiste barvy jako ul seznam
    echo "<ul>";
    foreach ($poleBarvy as $barva) {
        echo "<li>$barva</li>";
    }
    echo "</ul>";


    $poleProdanychProduktu = [
        "hrnek" => 52,
        "mobil" => 15,
        "televize" => 4,
        "fixa" => 102
    ];
    echo "<table border=1px solid black>";
    foreach ($poleProdanychProduktu as $nazev => $kolikJednotek) {
        echo "<tr>";
        echo "<td>$nazev: </td>";
        echo "<td>$kolikJednotek</td>";
        echo "</tr>";
    }
    echo "</table>";

    $poleZviratekNohy = [
        "pes" => 4,
        "had" => 0,
        "pavouk" => 8,
        "kocka" => 4,
        "kachna" => 2
    ];

    echo "<ul>";
    foreach ($poleZviratekNohy as $zviratko => $poctyNoh) {
        echo "<li>Zvire $zviratko má $poctyNoh noh.</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>