<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterace</title>
</head>
<body>
    <h1>iterace</h1>
    <?php
    $poleAuta = ["Audi", "Suzuki", "BMW", "Škoda", "Ferrari"];
    $mobil = [
        "znacka" => "apple",
        "pamet" => "128",
        "nfc" => true,
    ];

    echo "<hr>";
    //to cislo 5 muzeme zjsitit funkci count()
    //funkce count nam vrati pocet polozek v poli
    for ($index = 0; $index < count($poleAuta); $index++) {
        echo $poleAuta[$index];
        echo "<br>";
    }
    echo "<hr>";
    
    //ukazeme si iteraci pomoci while
    $index = 0;
    while ($index < count($poleAuta)) {
        echo $poleAuta[$index];
        echo "<br>";

        $index++;
    }


    echo "<hr>";


    foreach($poleAuta as $item){
        echo "$item <br>";
    }
    echo "<hr>";
    
    foreach($mobil as $key => $item){
        echo "$key => $item <br>";
    }
    
    echo "<hr>";
    
    
    ?>
    
</body>
</html>