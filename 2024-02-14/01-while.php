<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>while</h1>
    <!-- <div class="rozvrh">
        <table>
            <tr>
                
                <th>Po</th>
                <td>item2</td>
                <td>item3</td>
                <td>item4</td>
                <td>item5</td>
            </tr>
            <tr>
                <th>Ut</th>
                <td>item1</td>
                <td>item3</td>
                <td>item4</td>
                <td>item5</td>
            </tr>
            <tr>
                <th>St</th>
                <td>item2</td>
                <td>item3</td>
                <td>item4</td>
                <td>item5</td>
            </tr>
            <tr>
                <th>Ct</th>
                <td>item2</td>
                <td>item3</td>
                <td>item4</td>
                <td>item5</td>
            </tr>
            <tr>
                <th>Pa</th>
                <td>item2</td>
                <td>item3</td>
                <td>item4</td>
                <td>item5</td>
            </tr>
        </table>
    </div> -->

    <?php
    $pocet = 1;
    // while ($pocet <11){
    //     echo "Prihlasil se uzivatel $pocet";
    //     echo "<br>";
    //     $pocet++;
    // }
    
    while ($pocet < 7){
        echo "<h$pocet> Nadpis $pocet </h$pocet>";
        $pocet++;
    }

    


    ?>
</body>
</html>