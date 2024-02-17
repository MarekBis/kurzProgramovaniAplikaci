<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    //promenna je zakladni jednotka programu, kam muzeme ulozit hodnotu pro pozdejsi pouziti, hodnotu v promenne muzeme v prubehu programu menit a kazda promenna ma sve vlastni unikatni jmeno

    //timto prikazem jsme v programu vytvorili promennou $prijmeni
    //tato promenna je zatim prazdna nic v ni neni
    $prijmeni;

    //do promenne muzeme ulozit nejakou hodnotu
    $prijmeni = "Truong";

    echo $prijmeni;
    echo "<br>";
    echo $prijmeni;
    echo "<br>";
    echo $prijmeni;
    echo "<br>";

    //honodtu promenne muzeme zmenit, ulozime do promenne novou hodnotu, ktera nahradi starou hodnotu
    $prijmeni = "Novotný";
    echo $prijmeni; //Novotný
    echo "<br>";

    //pravidla pro jmena promennych
    //nesmi obsahovat mezeru
    //lze pouzit pouze anglickou abecedu, cisla a podtrzitka
    $hlavni_mesto; //snake_case - toto muzete pouzit
    $rokNarozeni; //camelCase - toto taky muzete pouzit
    $ZpusobPlatby; //PascalCase - se pouziva pro OOP (objektove orientovane programovani) classy
    //$znacka-notebooku; //kebab-case v PHP nelze pouzit, protoze si to PHP plete s odecitanim

    $mojeCislo = rand();
    echo $mojeCislo;
    echo "<br>";
    echo $mojeCislo;
    echo "<br>";
    echo $mojeCislo;
    echo "<br>";

    $mojeCislo = rand();
    echo $mojeCislo;
    echo "<br>";
    echo $mojeCislo;
    echo "<br>";

    $jmeno = "Tony"; //string
    $vek = 32; //integer
    $povolani = "programátor"; //string

    //Uzivatel xxx je xxx a je mu xxx let. 

    echo "Uzivatel $jmeno $prijmeni je $povolani a je mu $vek let.";
    echo "<br>";
    //apostrofy neumi vyytvaret template string
    echo 'Uzivatel $jmeno $prijmeni je $povolani a je mu $vek let.';

    echo "<br><br><br>";

    $kostka = rand(1,6);
    echo "Hodili jste kostkou a padlo vam cislo:$kostka";

    ?>





</body>
</html>