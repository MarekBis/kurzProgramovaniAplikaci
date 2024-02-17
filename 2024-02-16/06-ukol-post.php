<?php
    var_dump($_POST);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
}

        .container {
            margin: auto;
            text-align: center;
            box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
            border-radius: 10px;
            padding:5px;

        }
        input[type=submit] {
        width: 30%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
        input[type=number] {
        width: 20%;
        padding: 12px 20px;
        margin: 8px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        text-align: center;
}


    </style>
</head>

<body>
    <div class="container">

        <h1>post</h1>
        <form action="" method="post">
            <label for="">
                <input type="number" name="prvni-cislo" id="">
            </label>
            <label for="">
                <input type="number" name="druhe-cislo" id="">
            </label>
            <br>
            <input type="submit" name="cisla-input" value="Vyber">
        </form>



        <?php
        if (array_key_exists("cisla-input", $_POST)) {
            $cislo1 = $_POST["prvni-cislo"];
            $cislo2 = $_POST["druhe-cislo"];

            if ($cislo1 > $cislo2) {
                echo "$cislo1";
            } else {
                echo "$cislo2";
            }
        }

        ?>



    </div>
</body>

</html>