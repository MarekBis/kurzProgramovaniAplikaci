<?php
    var_dump($_POST);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>radio</h1>

    <form action="" method="post">
            <label for="one">Jedna</label>
            <input type="radio" name="radio" value="radio1" id="one">
            <label for="two">Dva</label>
            <input type="radio" name="radio" value="radio2" id="two">
            <label for="three">Tri</label>
            <input type="radio" name="radio" value="radio3" id="three">
            <input type="submit" name="cisla-input" value="Vyber">
        </form>
    
</body>
</html>