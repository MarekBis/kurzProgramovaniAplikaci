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
    mkdir("./moje-soubory")
    ?>
</body>
</html>