<?php
session_start();

if (array_key_exists("kosik", $_SESSION)) {
    //uzivatel uz kosik v SESSION ma tak nemmusime nic delat
} else {
    //uzivtale v SESSION jeste nic nema, je tu poprve
    //vytvorime do session klic "kosik" a hodnotou bude prazdne pole
    $_SESSION["kosik"] = array();
}

$poleNabidkaProduktu = array(
    "N100X3" => [
        "jmeno" => "hrnek",
        "cena" => 150,
        "obrazek" => "https://img.karavan.cz/images/550_960-image-1.jpeg"
    ],
    "55F3UC" => [
        "jmeno" => "mobil",
        "cena" => 10000,
        "obrazek" => "https://th.bing.com/th/id/OIP.NpPhFBZNRHL0FBNjaG1zqwHaHa?rs=1&pid=ImgDetMain"
    ],
    "GFQQ8P" => [
        "jmeno" => "polstar",
        "cena" => 700,
        "obrazek" => "https://i5.walmartimages.com/asr/7812b7b1-efdf-481c-83b2-ef9b043c3a70_3.d91f97a1588dee0038eee7d830849c86.jpeg"
    ],
    "64CWA7" => [
        "jmeno" => "fixa",
        "cena" => 35,
        "obrazek" => "https://th.bing.com/th/id/R.26c1abdc9ca0ddd2d14354e1915e3ef3?rik=q2idPiHipYT%2blA&pid=ImgRaw&r=0"
    ]
);

if (array_key_exists("pridat", $_GET)) {
    $kodProduktu = $_GET["pridat"];
    if (array_key_exists($kodProduktu, $_SESSION["kosik"])) {
        $_SESSION["kosik"][$kodProduktu]++;
    } else {
        $_SESSION["kosik"][$kodProduktu] = 1;
    }
    header("Location: ?");
    exit;
}
if(array_key_exists("odebrat",$_GET)){
    $kodProduktu = $_GET["odebrat"];
    $_SESSION["kosik"][$kodProduktu]--;
    if($_SESSION["kosik"][$kodProduktu] <=0){
        unset($_SESSION["kosik"][$kodProduktu]);
    }
    header("Location: ?");
    exit;
    
    }


var_dump($_SESSION);
var_dump($_GET);
var_dump($_POST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nakupni kosik</title>
</head>

<body>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .produkt {
            border-radius: 5px;
            background-color: beige;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 5px;
        }
    </style>
    <h1>Nakupni kosik</h1>

    <div class="container">
        <?php
        foreach ($poleNabidkaProduktu as $klic => $produkt) {
        ?>
            <div class="produkt">
                <img src="<?php echo $produkt["obrazek"]; ?>" alt="" width="150px" height="auto">
                <p><?php echo $produkt["jmeno"]; ?></p>
                <p><?php echo $produkt["cena"]; ?>Kč</p>
                <a href="?pridat=<?php echo $klic; ?>">Pridat do kosiku</a>
            </div>
        <?php
        }
        ?>
    </div>
    <table border="1px solid black">
        <?php
        $suma = 0;
        foreach ($_SESSION["kosik"] as $kodProduktu => $mnozstvi) {
            echo "<tr>
                <td>{$poleNabidkaProduktu[$kodProduktu]["jmeno"]}</td>
                <td>$mnozstvi</td>
                <td>{$poleNabidkaProduktu[$kodProduktu]["cena"]}</td>
                <td><a href='?odebrat=$kodProduktu'>Odebrat 1 kus</td>
            </tr>";

            $suma += $poleNabidkaProduktu[$kodProduktu]["cena"] * $mnozstvi;
        }
        echo "<tr>
            <td colspan=3>Celkova cena:$suma</td>
        </tr>";
        ?>

    </table>



</body>

</html>