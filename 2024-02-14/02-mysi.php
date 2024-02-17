<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>mysi</h1>
    <?php
    $rok=0;
    $mysi=2;
    $finalniPocet=3000000;
    while ($mysi <= $finalniPocet){
        $rok++;
        $mysi += $mysi * 4;
        echo "Rok: $rok";
        echo "<br>";
        echo "Pocet mysi: $mysi";
        echo "<br>";
        echo "<br>";
    }
    echo "Pocet mladat $mysi, pocet roku $rok";
    
    
    ?>
</body>
</html>