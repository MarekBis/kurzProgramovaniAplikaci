<?php
    $barva="white";
    if(array_key_exists("submit-barva",$_POST)){
        $barva = $_POST["barva"];

    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin: auto;
            text-align: center;
            box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
            border-radius: 10px;
            padding:5px;
            background-color: white;
            width: fit-content;
            padding:2rem;

        }
    </style>
</head>
<body style="background-color:<?php echo $barva?>" >
    <div class="container">
        <h1>zmena barvy pozadi</h1>
        <form action="" method="post">
            <label for="">Barva: </label>    
            <input type="color" name="barva" id="">
            <input type="submit" name="submit-barva" value="Poslat">
        </form>
    </div>
</body>
</html>