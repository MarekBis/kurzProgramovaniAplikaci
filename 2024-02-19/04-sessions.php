<?php
    session_start();
    if(array_key_exists("login-submit",$_POST)){
        $jmeno = $_POST["jmeno"];
        $heslo = $_POST["heslo"];
        if($jmeno == "kocka" && $heslo == "cici123"){
            $_SESSION["prihlasenyUzivatel"] = true;
        }

    }
    if(array_key_exists("logout-submit",$_GET)){
        session_destroy();
        setcookie("PHPSESSID","hodnota",time()-1,"/");
        header("Location: ?");
        exit;
    }





    var_dump($_SESSION);
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
    <h1>sessions</h1>
    <?php
    if(array_key_exists("prihlasenyUzivatel",$_SESSION)){
        echo "Jste prihlaseny";
        ?>
        <form action="" method="get">
            <input type="submit" value="Odhlasit se formularem" name="logout-submit">
        </form>
        <a href="?logout-submit">Odhlasit se odkazem</a>
        <?php
    }else{
        ?>
        <div class="loginContainer">
            <form action="" method="post">
                <label for="">Jmeno: </label>
                <input type="text" name="jmeno" id="">
                <label for="">Heslo: </label>
                <input type="password" name="heslo" id="">
                <input type="submit" name="login-submit" value="Login">
            </form>
        </div>
    <?php
    }
    ?>

    
</body>
</html>