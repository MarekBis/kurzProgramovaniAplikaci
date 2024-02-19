<?php
    if (array_key_exists("cookie-submit", $_POST)) {
        setcookie("cookie-souhlas", true, time() + 60*60*24*10);
        header("Location: ?");
        exit;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie lista</title>
</head>
<body>
    <style>
        body {
            height: 200vh;
        }

        .cookie-lista {
            position: fixed;
            bottom: 0;
            width: 100vw; /*viewport width*/
            background-color: bisque;
            padding: 5px;
        }
    </style>
    <h1>Cookie lista</h1>

    <!-- zobrazit uzivateli listu, pokud ji odsouhlasi, tak se lista 10 dni neobjevi znovu -->
    <!-- pokud uzivtael listu neodsouhlasi, tak ji zobrazovat pri kazde navsteve -->

    <?php
    if (!array_key_exists("cookie-souhlas", $_COOKIE)) {
        ?>
        <div class="cookie-lista">
            <form action="" method="post">
                <label for="">Tyto stranky pouzivaji cookies. Souhlasite s pouzitim cookies?</label>
                <input type="submit" name="cookie-submit" value="Souhlasim">
            </form>
        </div>
        <?php
    }
    ?>
    
</body>
</html>