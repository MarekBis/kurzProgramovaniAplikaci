<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ukol in_array</title>
</head>
<body>
    <h1>in_array</h1>

    <?php
    $poleZelenina = ["okurka", "mrkev", "celer", "cibule"];
    $poleOvoce = ["ananas", "mango", "jablko", "kiwi", "pomeranc"];

    var_dump(in_array("mrkev", $poleZelenina)); //true
    var_dump(in_array("brambora", $poleZelenina)); //false
    var_dump(in_array("kiwi", $poleOvoce)); //true
    var_dump(in_array("hruska", $poleOvoce)); //false

    echo "<hr>";

    //nesmite pouzit in_array, array_search
    //funkce bude brat 2 parametry
    //jehla: string
    //kupka sena: pole
    //funkce bude vracet boolean
    function moje_in_array($hledanyString,$pole) {
            foreach($pole as $slovo){
                if($slovo == $hledanyString){
                    return true;
                }
        }return false;
    }

    var_dump(moje_in_array("mrkev", $poleZelenina)); //true
    var_dump(moje_in_array("brambora", $poleZelenina)); //false
    var_dump(moje_in_array("kiwi", $poleOvoce)); //true
    var_dump(moje_in_array("hruska", $poleOvoce)); //false

    ?>
</body>
</html>