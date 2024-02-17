<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Table</title>
</head>
<body>
    <h1>Ukol tabulka</h1>




    <?php
    $pohlavi = "Muz";
    $vek = rand(18,40);
    
    echo "<table>
        <tr>
            <td>Vek</td>
            <td>{$vek}let</td>
        </tr>
        <tr>
            <td>Pohlavi</td>
            <td>$pohlavi</td>
        </tr>
    </table>";
    
    
    
    
    ?>
    <br>
    <!-- zde uz neni php zde je HTML blok -->
    <table border="1px solid">
        <tr>
            <td>Věk</td>
            <td><?php echo $vek; ?></td>
        </tr>
        <tr>
            <td>Pohlavi</td>
            <td><?php echo $pohlavi; ?></td>
        </tr>
    </table>


    
</body>
</html>