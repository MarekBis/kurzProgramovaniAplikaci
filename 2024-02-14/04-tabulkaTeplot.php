<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabulka</title>
</head>

<body>
    <h1>Teploty</h1>


    <table>
        <?php
        for ($celsius = -100; $celsius <= 100; $celsius += 10) {
            $fa=1.8*$celsius + 32;
            echo "<tr>
            <td>$celsius</td>
            <td>$fa
        </tr>";
        }
        ?>
    </table>

    <hr>
    <table>
        <?php
        for ($row = 1; $row <= 10; $row ++) {
            echo "<tr>";
            for ($col = 1; $col <= 10; $col ++) {
                $vysledek=$col*$row;
                echo "<td>$vysledek</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>