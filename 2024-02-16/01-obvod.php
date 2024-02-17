<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>obvod</h1>
    
    <?php
    function obvod ($polomer){
        return $obvod = round(pi() * $polomer * 2,2);
    }


    for ($i=1;$i<6;$i++){
        $polomer = rand(1,100);
        echo "$i. obvod polomeru $polomer = "; 
        echo obvod($polomer);
        echo "<br>";
    }

    ?>
</body>
</html>