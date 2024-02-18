<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabulka</title>
    <style>
        table,td{
            border: 3px solid black;
            border-collapse: collapse;
        }
        td{
            width: 200px;
            height: 50px;

        }
    </style>
</head>

<body>

    <table>
        <?php
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($x = 0; $x < 6; $x++) {
                echo "<td></td>";
            }
            echo  "</tr>";
        }
        ?>
    </table>

</body>

</html>