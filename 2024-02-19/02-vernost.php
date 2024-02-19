<?php
    if (array_key_exists("navsteva", $_COOKIE)) {
        //cookina exstuje
        $navsteva = $_COOKIE["navsteva"];
        setcookie("navsteva", $navsteva + 1, time() + 60*60*24*7);
    }else{
        //cookina neexistuje
        setcookie("navsteva", 1, time() + 60*60*24*7);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vernost ukol</title>
</head>
<body>
    <h1>Vernost ukol</h1>

    <!-- napiste kod, ktery podekuje uzivatli za kazdou desatou navstevu -->
    <!-- <h2>Děkujeme za vernost</h2> -->
    <?php
    if (array_key_exists("navsteva", $_COOKIE)) {
        if ($_COOKIE["navsteva"]%10 == 0) {
            echo "<h2>Děkujeme za vernost</h2>";
        }
    }
    ?>

    <!-- kdyz udelate setcookie a uvedete stejne jmeno uz existujici cookiny, tak se hodnota v cookine aktualizuje -->


</body>
</html>