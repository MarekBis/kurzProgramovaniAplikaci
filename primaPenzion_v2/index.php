<?php
require_once "./data.php";
   //vychozi id bude prvni polozka v poli
   $idStranky = array_keys($poleStranek)[0];
if (array_key_exists("id-stranky", $_GET)) {
    $idStranky = $_GET["id-stranky"];
}
if(!array_key_exists($idStranky,$poleStranek)){
    $idStranky = "404";
}
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title><?php echo $poleStranek[$idStranky]->titulek; ?></title>
</head>

<body>
    <header>
        <div class="container">
            <div class="headerLine">
                <a href="tel:+420606123456" class="odkaz">+420/606123456</a>
                <div class="headerIcons">
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>

                </div>
            </div>
            <a href="?id-stranky=domu" class="logo">Prima<br>Penzion</a>
            <?php require "./komponenty/navigace.php"; ?>
        </div>
        <img src="img/<?php echo $poleStranek[$idStranky]->obrazek; ?>" alt="PrimaPenzion">
    </header>
    <?php require "./$idStranky.html"; ?>
    <footer>
        <div class="footerObsah">
            <?php require "./komponenty/navigace.php"; ?>
            <a href="?id-stranky=domu" class="logo">Prima<br>Penzion</a>
            <div class="pataInfo">
                <p>
                    <i class="fa-regular fa-map"></i>
                    <a href="https://maps.app.goo.gl/ThvKYz79XGN2zLP88" target="_blank"><strong>PrimaPenzion</strong>,
                        Jablonského 2, Praha 7</a>
                </p>
                <p>
                    <i class="fa-regular fa-comment"></i>
                    <a href="tel:+420606123456">+420 / 606 123 456</a>
                </p>
                <p>
                    <i class="fa-regular fa-envelope"></i>
                    <span>info@primapenzion.cz</span>
                </p>
            </div>
            <div class="headerIcons">
                <a href="#" target="_blank">
                    <i class="fa-brands fa-facebook"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>

            </div>
        </div>
        <p class="copyright">&copy; <strong>PrimaPenzion</strong> 2023</p>
    </footer>
</body>

</html>