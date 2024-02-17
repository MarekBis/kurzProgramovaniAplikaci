<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kulatiny</title>
</head>
<body>
    <h1>Kulatiny</h1>

    <?php
    //vytvorite promennou vek a uzlote do ni nahodne cislo 0 az 100
    //pak provdte nejake operace s timto vekem a zjsiteke kolik let chybi uzivatlei do kulatin
    //"Nyni je vam xxx let do dalasich kulatin vam zbyva xxx let.
    $vek = rand(0,100);
    $cislo = 10 - ($vek % 10);
    echo "Nyni je vam $vek let, do dalsich kulatin vam chybi $cislo let.";

    $jmeno = 'Marek';
    $prijmeni= 'Bis';
    echo "<br>";
    echo '<b>'.$jmeno.' '.$prijmeni.'<b>';
    ?>
</body>
</html>