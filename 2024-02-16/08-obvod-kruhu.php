<?php
    //nastavime vychozi hodnotu pro polomer
    //ktera s epak zobrazi v inputu
    $polomer = 0;

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
        <!-- value je atribut, ktery pouzijeme k tomu abychom do inputu vespali nejakou hodnotu -->
        <!-- toto vlaue se pouziva pokud chceme neco predvyplnit nebo pokud formular obsahuje chyby a chem aby si to uzivatel opravil -->
        <input type="number" name="polomer" id="" value="<?php echo $polomer; ?>">

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