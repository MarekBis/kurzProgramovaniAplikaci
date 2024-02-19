<?php
if(array_key_exists("navsteva",$_COOKIE)){
    setcookie("navsteva",$_COOKIE["navsteva"]+1,time()+60*60*24*7);
}else{
    setcookie("navsteva",1,time()+60*60*24*7);
}

var_dump($_COOKIE);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: grey;
        }
    </style>
    <h1>vernostni program</h1>

</body>
</html>