<?php
    if (array_key_exists("obvod-submit", $_POST)) {
        $polomer = $_POST["polomer"];

        $obvod = $polomer * 2 * pi();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obvod kruhu</title>
</head>
<body>
    <h1>Obvod kruhu</h1>

    <!-- vytvorte formular po vypocet obvodu kruhu -->
    <form action="" method="post">
        <label for="">Polomer</label>
        <input type="number" name="polomer" id="">

        <input type="submit" name="obvod-submit" value="Vypocitej">
    </form>

    <?php
    //isset vraci boolean
    //true poku promenna existuje, false pokud pormenna neexistuje
    if (isset($obvod)) {
        echo "Kruh s polomerem $polomer ma obvod $obvod.";
    }
    ?>

</body>
</html>