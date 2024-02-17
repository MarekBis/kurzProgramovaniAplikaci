<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obvod kruznice</title>
</head>
<body>
    <h1>Obvod kurznice</h1>

    <?php
    $polePolomeru = [];
    for ($i=0;$i<20;$i++){
        $polePolomeru[$i] = $polomer = rand(1, 100);
    }
    var_dump($polePolomeru);
    
    
    echo "<table border='1px solid black'>";
    foreach($polePolomeru as $polomer){
        $obvod = round(pi() * $polomer * 2,2);
        echo "<tr>
                <td>$polomer</td>
                <td>$obvod </td>
            </tr>";
    }
    echo "</table>";



// tonda
    for ($i = 0; $i < 20; $i++) {
        $polomer = rand(1,100);
        $obvod = pi() * 2 * $polomer;
        echo "<tr>
            <td>$polomer</td>
            <td>$obvod</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>
</html>