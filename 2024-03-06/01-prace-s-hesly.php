<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <h1>pass</h1>
    <?php
    $hash =  password_hash("cici123",PASSWORD_BCRYPT,array("cost" =>12));
    echo $hash;

    $vybranyHashHesla = '$2y$12$a1QQBGYSxs/ZqcsLGhVXouwRYi.2nhRdnrKLPt40Qho8/rvN7f.C6';


    //pro overeni shody hashu se pouziva password_verify
    //do prvniho parametru se vlozi heslo ktere zadal uzivatel, ktery se chce prihlasit
    //do druheho parametru se zada hash, ktery mame ulozeny v DB
    //totoa funkce pak vrati boolean
    $vysledek = password_verify("haf123",$vybranyHashHesla);
    var_dump($vysledek);
    $vysledek = password_verify("cici123",$vybranyHashHesla);
    var_dump($vysledek);




    ?>
    
</body>
</html>