<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>prumer</h1>

    <?php

    for ($i = 0; $i < 10; $i++) {
        $pole[$i] = rand(0, 50);
    }
    var_dump($pole);
    $prazdnePole=[];

    function prumer($pole)
    {
        if (count($pole) > 0) {
            $suma = 0;
            for ($i = 0; $i < count($pole); $i++) {
                $suma += $pole[$i];
            }
            return round($suma / (count($pole)), 2);
        } else {
            return false;
        }
    }
    echo "Prumer je: ";
    echo prumer($pole);
    var_dump(prumer($prazdnePole));

    ?>
</body>

</html>