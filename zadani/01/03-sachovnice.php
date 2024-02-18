<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 1px solid black;
            border-collapse: collapse;
            padding:50px;
        }
        #black{
            background-color: grey;

        }
    </style>
</head>
<body>
    

<table>
    <?php
    for ($i=0; $i <8 ; $i++) { 
        echo "<tr>";
        if ($i%2 == 0){
            for ($x=0; $x <4 ; $x++) { 
                echo "<td id='black'></td>
                <td id='white'></td>";
            }
        }else{
            for ($x=0; $x <4 ; $x++) { 
                echo "<td id='white'></td>
                <td id='black'></td>";
            }
        }
        echo "</tr>";
    }
    
    ?>
</table>
</body>
</html>