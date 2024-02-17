<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkce</title>
</head>
<body>
    <h1>Funkce</h1>

    <?php
    //matematicke funkce
    
    //tato funkce vraci nahodne cislo
    //do kulatych zavorek muzeme napsat 2 parametry (min a max)
    $nahodneCislo = rand(0, 100);

    //funkce round() nam zaorkouhli cislo
    //druhy parametr je nepovinny a urcuje pocet desetinych mist
    var_dump(round(5.77)); //6
    var_dump(round(5.12)); //5
    var_dump(round(5.457, 2)); //5.46

    //funkce pi() nebere zadny parametr
    //tato funkce nam vrati cislo PI
    //cislo PI se pouzvia pro vypocty kruhu
    var_dump(pi()); //3.1415926535898
    var_dump(round(pi(), 5)); //3.14159

    //funkce min a max, zjisti nejvyssi/nejmensi zadane cislo
    var_dump(max(9, 1, 7, 5, 4)); //9
    //vetisnou do teto funkce vkladame pole
    $poleCisel = [45, 88, 14, 62, 31];
    var_dump(max($poleCisel)); //88
    var_dump(min($poleCisel)); //14

    //sort() tato funkce nam seradi pole
    //toto je originalni poradi cisel
    var_dump($poleCisel); //45, 88, 14, 62, 31
    sort($poleCisel);
    //toto je nove poradi cisel
    var_dump($poleCisel); //14, 31, 45, 62, 88

    //ceil a floor jsou funkce ktere zaokrouhluji cisla
    //ceil vzdy zaokrouhluje nahoru floor vzdy dolu
    var_dump(ceil(5.12)); //6
    var_dump(floor(5.12)); //5
    var_dump(ceil(5.888)); //6
    var_dump(floor(5.888)); //5

    //textove funkce
    //funkce ktere pracuji se stringem

    //strlen pocita znaky
    // "č" se pocita jako 2 znaky
    //strlen pocit i mezeru jako 1 znak
    var_dump(strlen("čtvrtek")); //8

    //strlen ma multibajtovou variantu
    //zde se "č" počíta jako 1 znak
    var_dump(mb_strlen("čtvrtek")); //7

    //strtoupper a strtolower
    //mb_strtoupper a mb_strtolower
    var_dump(mb_strtolower("Kadaň")); //kadaň
    var_dump(mb_strtoupper("Kadaň")); //KADAŇ

    //explode
    //tato funkce nam rozseka text na mensi casti a vrati nam pole
    $veta = "Dneska je venku zima.";
    $poleSlov = explode(" ", $veta);
    var_dump($poleSlov);
    $text = "mléko, cukr, mouka, vejce, ořechy";
    $poleIngredienci = explode(", ", $text);
    var_dump($poleIngredienci);
    //sparovat muzeme podle cehokoliv
    var_dump(explode("e", $veta));

    //implode udela opak explodu
    $poleOvoce = ["jablko", "pomeranc", "citron", "banan"];
    $vyslednyString = implode(" - ", $poleOvoce);
    echo $vyslednyString;

    //trim() je funkce ktera odstrani prebytecne mezerey pred a za textem
    //tyka se to jen tech krajnich mezer mezery uvnitr textu zustavaji
    $email = "    tonda.truong@primakurzy.cz     ";
    $novyEmailBezMezer = trim($email);
    var_dump($novyEmailBezMezer);

    //str_replace() tato funkce nahradi kus textu za jiny
    $veta = "Dneska je čtvrtek!";
    $novaVeta = str_replace("čtvrtek", "pátek", $veta);
    var_dump($novaVeta);
    //str replace dokaze nahradit vice ruznych kusu textu
    $veta = "Tonda má rad modrou a růžovou barvu.";
    $novaVeta = str_replace(array("modrou", "růžovou"), "černou", $veta);
    var_dump($novaVeta);

    //htmlspecialchars() toto je funkce ktera nam zhnehodnoti html kod pro bezpecne vypsani z databaze
    $textHTMLKodu = "<h1>Hlavni <strong>nadpis</strong><h1>";
    $escapovanyText = htmlspecialchars($textHTMLKodu);
    echo $textHTMLKodu;
    echo $escapovanyText;
    var_dump($textHTMLKodu);
    var_dump($escapovanyText);

    //funkce poli
    //sort, min a max uz jsme meli u matematickych funkci

    //count nam zjsiti pocet prvku poli
    $poleNotebooky = array("msi", "hp", "lenovo", "asus", "acer", "apple");
    var_dump(count($poleNotebooky)); //6

    //in_array() je funkce, ktera zjisti zda hledany prvek v poli existuje
    //funkce vraci boolean
    //prvni parametr je needle (jehla)
    //druhy parametr je haystack (kupka sena)
    var_dump(in_array("acer", $poleNotebooky)); //true
    var_dump(in_array("toshiba", $poleNotebooky)); //false

    //array_search() je funkce ktera nam vrati index hledaneho prvku
    //pokud prvek v poli neni tak dostaneme false
    var_dump(array_search("acer", $poleNotebooky)); //4
    var_dump(array_search("toshiba", $poleNotebooky)); //false

    //array_keys() je funkce, ktera nam vrati pole vsech indexu/klicu
    $poleLektor = [
        "jmeno" => "Tony",
        "rokNarozeni" => 1992,
        "jeZivy" => true,
        "barvaOci" => "hneda"
    ];
    //nezajimaji nas hodnoty chceme jen klice
    $poleKlicu = array_keys($poleLektor);
    var_dump($poleKlicu);

    ?>
</body>
</html>