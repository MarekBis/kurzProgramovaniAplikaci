<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textove operatory</title>
</head>
<body>
    <h1>Textove operatory</h1>

    <?php
    //.
    //tento operator tecka funguje jako lepidlo stringu
    $jmeno = "Tony";
    $vek = 32;
    echo $jmeno." je programator a je mu ".$vek." let!";
    //Tony je programator je mu 32 let!

    echo "<br>";

    //teckovy zapis je stary zpusob jak kombinovat stringy a promenne
    //novy zpusob uz zname kombinovani pomoci tempplate stringu
    //funguje pouze pro PHP verze 7+
    echo "$jmeno je programator a je mu $vek let!"; 


    //operator .=
    //tento operator je podbny operatoru +=, s tim rozdilem ze .= pracuje se stringy zatimco += pracuje s cisly
    $celeJmeno = "Tony";
    $celeJmeno .= " ";
    $celeJmeno .= "Truong";
    echo "<br>";
    echo $celeJmeno; //"Tony Truong"

    //stringy maji taky operator +
    //pokud pouzijeme operator + pro stringy, tak se PHP pokusi stirngy prevest na cislo
    //muzeme scitat cisla a stringy jne pokud ve stringu jsou jenom cisla
    echo "<br>";
    echo 6 + "5"; // 11
    echo "<br>";
    // echo 6 + "klokan"; // vyhodi chybu
    echo "<br>";
    echo 6 + "12"; //18


    ?>

</body>
</html>