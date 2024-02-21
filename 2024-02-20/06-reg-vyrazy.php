<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg v.</title>
</head>
<body>
    <style>
        body{
            background-color: lightgrey;
        }
    </style>
    <h1>regularni vyrazy</h1>
    <?php
    $regex = "/^(\+420|00420)? ?[1-9]{1}[0-9]{2} ?[0-9]{3} ?[0-9]{3}$/";
    
    var_dump(preg_match($regex, "111222333"));//true
    var_dump(preg_match($regex, "+420111222333"));//true
    var_dump(preg_match($regex, "00420111222333"));//true
    var_dump(preg_match($regex, "+420 111 222 333"));//true
    var_dump(preg_match($regex, "1112223334"));//false
    var_dump(preg_match($regex, "AAABBBCCC"));//false
    var_dump(preg_match($regex, "011222333"));//false
    var_dump(preg_match($regex, "kocka111222333"));//false
    var_dump(preg_match($regex, "112233"));//false
    var_dump(preg_match($regex, "+410111222333"));//false
    ?>

    
</body>
</html>