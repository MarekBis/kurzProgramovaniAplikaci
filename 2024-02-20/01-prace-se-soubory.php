<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prace se soubory</title>
</head>
<body>
    <h1>Prace se soubory</h1>

    <?php
    //persistentne ukladat data neumime, cookie a session se snadno ztrati
    //persistentne se data ukladaji pomoci databaze, to se budeme ucit az dlasi tyden
    //nyni mame alternativu: zapisovat data do textovych souboru

    //mkdir() je funkce ktera umi vytvorit slozku, pokud slozka s danym nazvem uz exisutje, tka vyhodi chybu
    //file_exists() zjisti zda dany soubouro nebo slozka existuje
    if (file_exists("./moje-soubory")) {
        echo "<p>slozka moje-soubory uz existuje!</p>";
    }else{
        mkdir("./moje-soubory");
        echo "<p>vytvoril jsem slozku moje-soubory</p>";
    }

    //cvicne mi do slozky moje-soubory vytvorte jeste dalsi 2 slozky
    //slozka-a
    //slozka-b
    if (file_exists("./moje-soubory/slozka-a")) {
        echo "<p>slozka slozka-a uz existuje!</p>";
    }else{
        mkdir("./moje-soubory/slozka-a");
        echo "<p>vytvoril jsem slozku slozka-a</p>";
    }

    if (file_exists("./moje-soubory/slozka-b")) {
        echo "<p>slozka slozka-b uz existuje!</p>";
    }else{
        mkdir("./moje-soubory/slozka-b");
        echo "<p>vytvoril jsem slozku slozka-b</p>";
    }

    //nove soubory se vytvareji pomoci file_put_contents
    //tato funkce se pouziva u pro zapsani do souboru 
    file_put_contents("./moje-soubory/slozka-b/emaily.txt", "tonda.truong@primakurzy.cz");

    //pokud funkci zavolate bez specialni tretiho parametru, tak se cely orginalni obsah souboru nahradi za novy
    //tonda zmizi a bude prepsan kubou
    file_put_contents("./moje-soubory/slozka-b/emaily.txt", "jakub.novotny@primakurzy.cz");

    //kdyz chcme eaby tam original obsah zustal a my jenom pripsali neco navic, tak musime uvest parametr FILE_APPEND
    
    //chceme mit v souboru seznam emailu a kazdy email bdue na vlastnim radku
    //vlozime do souboru novy radek
    //oescapovany \n znamena novy radek v textovem souboru 
    file_put_contents("./moje-soubory/slozka-b/emaily.txt", "\n", FILE_APPEND);
    //vlozime do souboru dalsi email
    file_put_contents("./moje-soubory/slozka-b/emaily.txt", "josef.kyrian@primakurzy.cz", FILE_APPEND);

    $obsahSouboru =file_get_contents("./moje-soubory/slozka-b/emaily.txt");
    $obsahSouboru = explode("\n",$obsahSouboru);
    var_dump($obsahSouboru);

    
    
    echo "<ul>";
    foreach($obsahSouboru as $email){
        echo "<li>$email</li>";
    }
    echo "</ul>";
    $poleNazvu = scandir("./");
    var_dump($poleNazvu);
    echo "<ul>";
        foreach($poleNazvu as $nazev){
            if($nazev == ".." || $nazev == "."){
                continue;
            }else{
                if(is_dir("./$nazev")){
                    echo "<li>$nazev (dir)</li>";
                    
                }else if(is_file("./$nazev")){
                    echo "<li>$nazev (file)</li>";
                }
            }
        }
    echo "</ul>";





    file_put_contents("./moje-soubory/slozka-a/test.txt","");
    echo "Slozka A";
    var_dump(scandir("./moje-soubory/slozka-a"));
    
    rename("./moje-soubory/slozka-a/test.txt","./moje-soubory/slozka-a/pokus.txt");
    echo "Slozka A";
    var_dump(scandir("./moje-soubory/slozka-a"));
    
    rename("./moje-soubory/slozka-a/pokus.txt", "./moje-soubory/slozka-b/pokus.txt");
    echo "Slozka A";
    var_dump(scandir("./moje-soubory/slozka-a/"));
    echo "Slozka B";
    var_dump(scandir("./moje-soubory/slozka-b/"));
    unlink("./moje-soubory/slozka-b/pokus.txt");
    echo "Slozka B";
    var_dump(scandir("./moje-soubory/slozka-b/"));
        ?>


</body>
</html>