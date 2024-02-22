<?php
    require_once "./vendor/autoload.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>knihovny</h1>
    <?php
    echo sayHello();
    $faker = Faker\Factory::create();
    echo "<br>";
    echo $faker->name;
    echo "<br>";
    echo $faker->name;
    echo "<br>";
    echo $faker->name;
    echo "<br>";
    echo $faker->address;
    echo "<br>";
    echo $faker->phoneNumber;
    echo "<br>";
    ?>
    
</body>
</html>