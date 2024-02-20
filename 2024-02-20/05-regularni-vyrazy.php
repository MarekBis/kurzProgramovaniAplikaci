<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regulani vyrazy</title>
</head>
<body>
    <h1>Regularni vyrazy</h1>

    <?php
    //regularni vyraz slouzi k otestovani stringu, zda splnuji nejake vami definovane pravidla
    //regularni vyraz je sada pravidel, co ten string musi splnovat

    //regulani vyrazy se aplikuji pomoci funkce preg_match
    //tato funkce vraci boolean

    //tento regularni vyraz rika, ze testovany string musi v sobe obsahovat vlk
    var_dump(preg_match("/vlk/", "zebra")); //false
    var_dump(preg_match("/vlk/", "vlk")); //true
    var_dump(preg_match("/vlk/", "vlkodlak")); //true
    var_dump(preg_match("/vlk/", "polovlkodlak")); //true

    echo "<hr>";

    //ZASTUPNE znaky
    //zastupny znak . rika, ze na jeho pozici muze byt libovolny znak
    var_dump(preg_match("/v.k/", "zebra")); //false
    var_dump(preg_match("/v.k/", "vek")); //true
    var_dump(preg_match("/v.k/", "vlk")); //true
    var_dump(preg_match("/v.k/", "veka")); //true
    var_dump(preg_match("/v.k/", "vakum")); //true
    var_dump(preg_match("/v.k/", "prvok")); //true
    var_dump(preg_match("/v.k/", "prv9k")); //true

    echo "<hr>";
    //zastupny znak * rika, ze znak, ktery je pred hvezdickou se muze opakovat 0 az N
    var_dump(preg_match("/halo*/", "hal")); //true
    var_dump(preg_match("/halo*/", "halo")); //true
    var_dump(preg_match("/halo*/", "haloo")); //true
    var_dump(preg_match("/halo*/", "halooo")); //true
    var_dump(preg_match("/go*gle/", "ggle")); //true
    var_dump(preg_match("/go*gle/", "gogle")); //true
    var_dump(preg_match("/go*gle/", "google")); //true
    var_dump(preg_match("/go*gle/", "gooogle")); //true
    var_dump(preg_match("/go*gle/", "gagle")); //false
    var_dump(preg_match("/go*gle/", "goagle")); //false
    echo "<hr>";

    //zastupny znak + rika, že znak, ktery je pred pluskem se muze opakovat 1 az N
    var_dump(preg_match("/go+gle/", "ggle")); //false
    var_dump(preg_match("/go+gle/", "gogle")); //true
    var_dump(preg_match("/go+gle/", "gooooogle")); //true
    echo "<hr>";

    //zastupny znak ?, rika, že znak, ktery je před otaznikem je nepovinny
    var_dump(preg_match("/eth?anol/", "ethanol")); //true
    var_dump(preg_match("/eth?anol/", "etanol")); //true
    echo "<hr>";

    //do {} se pise ciselny rozsah a rika to, kolikrat se znak pred chlupatyma zavorkama muze opakovat
    var_dump(preg_match("/go{2,5}gle/", "ggle")); //false
    var_dump(preg_match("/go{2,5}gle/", "gogle")); //false
    var_dump(preg_match("/go{2,5}gle/", "google")); //true
    var_dump(preg_match("/go{2,5}gle/", "gooogle")); //true
    var_dump(preg_match("/go{2,5}gle/", "goooogle")); //true
    var_dump(preg_match("/go{2,5}gle/", "gooooogle")); //true
    var_dump(preg_match("/go{2,5}gle/", "goooooogle")); //false
    echo "<hr>";

    //zastupny znak |, rika ze je monze pouzit levou nebo pravou variantu regexu
    //narozdil od odstatnik zastupnych znaku, tak pajpa se tyka celeho stirngu pred a za pajpou (ostatni zastupny znaky se maji efekt pouze na 1 znak)
    var_dump(preg_match("/ho|ta/", "kocka")); //false 
    var_dump(preg_match("/ho|ta/", "hostinec")); //true 
    var_dump(preg_match("/ho|ta/", "hodnota")); //true 
    var_dump(preg_match("/ho|ta/", "kontakt")); //true 
    var_dump(preg_match("/ho|ta/", "kalhoty")); //true 
    echo "<hr>";

    //kombinovani znaku
    //znaky se mohou navzajem ovlivnovat
    var_dump(preg_match("/g.{1,3}gle/", "ggle")); //false
    var_dump(preg_match("/g.{1,3}gle/", "gagle")); //true
    var_dump(preg_match("/g.{1,3}gle/", "gaogle")); //true
    var_dump(preg_match("/g.{1,3}gle/", "gaoegle")); //true
    var_dump(preg_match("/g.{1,3}gle/", "gaoeigle")); //false
    var_dump(preg_match("/g.*gle/", "123g456gle789")); //true
    var_dump(preg_match("/g.{2}gle/", "google")); //true
    var_dump(preg_match("/g.{2}gle/", "goagle")); //true
    var_dump(preg_match("/g.{2}gle/", "gaagle")); //true
    var_dump(preg_match("/g.{2}gle/", "gooogle")); //false
    // "g..gle" je to same jako "g.{2}gle"
    echo "<hr>";

    //FIXACNI ZNAKY
    //tento znak ^ rika, že testovany stirng musi timto vrazem zacinat
    var_dump(preg_match("/^teta/", "teta")); //true
    var_dump(preg_match("/^teta/", "tetanus")); //true
    var_dump(preg_match("/^teta/", "prateta")); //false
    echo "<hr>";
    //znak $ rika, ze string musi na dany vyraz koncit
    var_dump(preg_match("/teta$/", "teta")); //true
    var_dump(preg_match("/teta$/", "tetanus")); //false
    var_dump(preg_match("/teta$/", "prateta")); //true
    echo "<hr>";

    //kombinovani
    var_dump(preg_match("/^te.+na$/", "termina")); //true
    var_dump(preg_match("/^teta$/", "tetateta")); //false
    echo "<hr>";

    //SESKUPOVACI ZNAKY
    //seskupovaci znak () omezi nebo rozsisi posobnost zastupneho znaku
    //() pro rozsireni pusobnosti
    var_dump(preg_match("/(pra)?clovek/", "clovek")); //true
    var_dump(preg_match("/(pra)?clovek/", "praclovek")); //true
    //() pro omezeni pusobnosti
    var_dump(preg_match("/dekuji|eme/", "emental")); //true
    var_dump(preg_match("/dekuj(i|eme)/", "emental")); //false
    var_dump(preg_match("/dekuj(i|eme)/", "dekuji")); //true
    var_dump(preg_match("/dekuj(i|eme)/", "dekujeme")); //true
    echo "<hr>";

    // znak [] nam rika jake znaky muzeme pouzit
    // toto dava smysl jen v kombinaci s dalsim znak
    var_dump(preg_match("/p[aeodki]{1,3}s/", "pes")); //true
    var_dump(preg_match("/p[aeodki]{1,3}s/", "pas")); //true
    var_dump(preg_match("/p[aeodki]{1,3}s/", "prs")); //false
    var_dump(preg_match("/p[aeodki]{1,3}s/", "paas")); //true
    var_dump(preg_match("/p[aeodki]{1,3}s/", "pakos")); //true
    var_dump(preg_match("/p[aeodki]{1,3}s/", "pakoes")); //false
    //je to case senzitivni
    var_dump(preg_match("/p[ae]{1}s/", "pes")); //true
    var_dump(preg_match("/p[ae]{1}s/", "pas")); //true
    var_dump(preg_match("/p[ae]{1}s/", "pAs")); //false
    var_dump(preg_match("/p[aeA]{1}s/", "pAs")); //true

    echo "<hr>";
    //znak - se pouziva v kombinaci s [] a definuji rozsah
    var_dump(preg_match("/p[a-d]{1}s/", "pas")); //true
    var_dump(preg_match("/p[a-d]{1}s/", "pbs")); //true
    var_dump(preg_match("/p[a-d]{1}s/", "pcs")); //true
    var_dump(preg_match("/p[a-d]{1}s/", "pds")); //true
    var_dump(preg_match("/p[a-d]{1}s/", "pes")); //false

    var_dump(preg_match("/^[a-zA-Z]{5}$/", "pes")); //false
    var_dump(preg_match("/^[a-zA-Z]{5}$/", "zebra")); //true
    var_dump(preg_match("/^[a-zA-Z]{5}$/", "ZEBRA")); //true
    var_dump(preg_match("/^[a-zA-Z]{5}$/", "kobra")); //true
    var_dump(preg_match("/^[a-zA-Z]{5}$/", "Kobra")); //true
    var_dump(preg_match("/^[a-zA-Z]{5}$/", "pes11")); //false

    var_dump(preg_match("/^[0-5]{3}$/", "111")); //true
    var_dump(preg_match("/^[0-5]{3}$/", "510")); //true
    var_dump(preg_match("/^[0-5]{3}$/", "119")); //false 
    var_dump(preg_match("/^[0-5]{3}$/", "1111")); //false 
    echo "<hr>";

    //ESCAPOVACI ZNAK
    //zpetne lomitko se pouziva pro znaky, ktere chceme v regexu syntakticky znehodnotit
    //., +, *, ^, atd...
    var_dump(preg_match("/^.+.com$/", "google.com")); //true
    var_dump(preg_match("/^.+.com$/", "google8com")); //true
    var_dump(preg_match("/^.+\.com$/", "google8com")); //false
    var_dump(preg_match("/^.+\.com$/", "google.com")); //true
    var_dump(preg_match("/^.+\.com$/", "alza.com")); //true
    var_dump(preg_match("/^.+\.com$/", "seznam.com")); //true
    
    var_dump(preg_match("/^.{1,8}\.com$/", "seznam.com")); //true

    ?>
</body>
</html>