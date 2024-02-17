<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $poleCisel=[4,3,1,2];
    $novePole=[];
    var_dump($poleCisel);
    unset($poleCisel[0]);
    var_dump($poleCisel);
    $novePole = array_values($poleCisel);
    var_dump($poleCisel);
    var_dump($novePole);

    
    
    
    ?>
</body>
</html>