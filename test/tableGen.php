<?php
session_start();


if (array_key_exists("pocetKol", $_SESSION)) {
    //existuje
    $_SESSION["pocetKol"]++;
    $kolo = $_SESSION["pocetKol"];
} else {
    //sess neexistuje
    $_SESSION["pocetKol"] = 0;
    $kolo = $_SESSION["pocetKol"];
    $_SESSION["row1col1"] = "";
    $_SESSION["row1col2"] = "";
    $_SESSION["row1col3"] = "";

    $_SESSION["row2col1"] = "";
    $_SESSION["row2col2"] = "";
    $_SESSION["row2col3"] = "";

    $_SESSION["row3col1"] = "";
    $_SESSION["row3col2"] = "";
    $_SESSION["row3col3"] = "";


}

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
        table,
        td {
            border: 4px solid black;
            border-collapse: collapse;
        }

        td {

            width: 100px;
            height: 100px;
        }

        a {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            text-decoration: none;
            font-size: 2rem;
        }

        a:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($col = 1; $col < 4; $col++) {
            echo "<tr>";
            for ($row = 1; $row < 4; $row++) {
                echo "<td id='row$row-col$col'><a href=?row$row-col$col>";

                if (array_key_exists("row$row-col$col", $_GET)) {
                    if ($kolo % 2 == 0 || $kolo == 0) {
                        echo $_SESSION["row$row-col$col"] = $znak1;
                    } else {
                        echo $_SESSION["row$row-col$col"] = $znak2;
                    }
                }
                echo "</a></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>