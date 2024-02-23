<?php
session_start();
echo "\$_GET <br>";
var_dump($_GET);
echo "\$_POST <br>";
var_dump($_POST);
echo "\$_SESSION <br>";
var_dump($_SESSION);
echo "\$_COOKIE <br>";
var_dump($_COOKIE);

$znak1 = "X";
$znak2 = "O";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablegen</title>
    <style>
        table,td{
            border: 4px solid black;
            border-collapse: collapse;
        }
        td{

            width: 100px;
            height: 100px;
        }
        a{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
        a:hover{
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <table>
        <?php
    for ($col=1; $col <4 ; $col++) { 
        echo "<tr>";
        for ($row=1; $row < 4; $row++) { 
            echo "<td id='row$row-col$col'><a href=?row$row-col$col>";

            if (array_key_exists("row$row-col$col",$_GET)){
                if($tah % 2 == 0 || $tah ==0){
                    echo $znak1;
                    echo $tah+=1;
                }else{
                    echo $znak2;
                    echo $tah=4;
                    
                }
            }else{
                $tah=0;
            }
            echo "</a></td>";
        }
        echo "</tr>";
    }
    var_dump($tah);
    ?>
    </table>

</body>
</html>