<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkce teploty</title>
</head>
<body>
    <h1>Funkce teploty</h1>

    <?php

    //potrebujeme napsat 2 funkce
    // C -> F
    // F -> C

    function cNaF ($argC) {
        $f = $argC * 1.8 + 32;
        return $f;
    }

    function fNaC ($argF) {
        $c = ($argF - 32) / 1.8;
        return $c;
    }



    ?>

</body>
</html>