<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
    <?php

    for ($i=0; $i <20 ; $i++) {
        $cislo = rand(0,10);
        $znamenka=["+","-"];
        echo "<tr><td>$cislo {$znamenka[rand(0,1)]} $cislo =</td></tr>";
    }       
    ?>
    </table>

    
    
    
</body>
</html>