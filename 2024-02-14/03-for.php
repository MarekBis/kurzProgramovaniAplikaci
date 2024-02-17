<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>for</h1>


    <ul>
        <?php
        for ($i=0;$i<=10;$i++){
            echo "<li> $i </li>";
        }
        ?>
    </ul>



    <?php
    

    // for($i=55;$i>=42;$i--){
    //     echo "$i";
    //     echo '<br>';
    // }
    
    // echo '<br>';
    // echo '<hr>';

    // for($i=0;$i<=20;$i++){
    //     if($i %3 == 0){
    //         echo "$i";
    //         echo '<br>';
    //     }
    // }
    // echo '<hr>';

    // for ($i=0;$i<20;$i++){
    //     echo rand(0,100);
    //     echo ' ';
    // }

    echo '<ul>';
    for ($i=0;$i<=10;$i++){
        echo "<li> $i </li>";
    }
    echo "</ul>";
    
    ?>
    
</body>
</html>