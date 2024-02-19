<?php
$pocetKolecek = 0;
if (array_key_exists("submit-kolecka", $_POST)) {
    $pocetKolecek = $_POST["pocet-kolecek"];
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
}


?>
<!-- formular, kam uzivatel zada nejake cislo  -->
<!-- vygenerujte mu zadany pocet kolecek kazde kolecko bude mit nahodnou barvu -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balls</title>
    <style>
        body {
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .ball {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 2rem 2rem 1rem 2rem;
            border: 2px solid black;

        }
        .col{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-bottom: 50px;
        }
    </style>
</head>

<body>
    <h1>ukol</h1>
    <form action="" method="post">
        <label for="">Zadejte pocet kolecek: </label>
        <input type="number" name="pocet-kolecek" id="">
        <input type="submit" name="submit-kolecka" value="Odeslat">
    </form>
    <div class="container">
        <?php
        for ($i = 0; $i < $pocetKolecek; $i++) {
            $color = '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)];
            echo "<div class='col'><div class=ball style=background:$color></div>
            <input type='color' name='barva' value='$color'></div>";
            
        }
        ?>
    </div>
</body>

</html>