<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ukol2</h1>



    <?php
    // echo $test1 = rand(0, 100);
    // echo "<br>";
    // echo $test2 = rand(0, 100);
    // echo "<br>";
    
    
    // if ($test1 + $test2 >= 100) {
    //     echo "splnil";
    // } else {
    //     echo "Nesplnil podminky, musis napsat test.";
    //     echo "<br>";
    //     echo $zaverecny = rand(0, 100);
    //     echo "<br>";
    //     if ($zaverecny >= 50) {
    //         echo "Test zvladnut.";
    //     } else {
    //         echo "nesplnil zaverecky";
    //     }
    // }

    ?>


    <h2>podukol2</h2>
    <?php
    echo '1 - muz <br> 2 - zena <br> 3 - jine';
    echo '<br>';
    echo '<br>';
    echo 'Pohlavi: ';
    echo $pohlavi = rand(1,3); //1 muz 2 zena 3 jine
    echo '<br>';
    echo "Vek: ";
    echo $vek = rand(6,99);
    echo '<br>';

    if($vek > 18 ){
        echo "Vysledek: ";
        if ($pohlavi == 1){
            echo 'moda pro muze';
        }else if ($pohlavi == 2){
            echo 'moda pro zeny';
        }else if ($pohlavi == 3){
            echo ' unisex moda';
        }
    }else{
        echo "Vysledek: Jsi prilis mlady";
    }

    
    
    
    ?>
</body>

</html>