<?php
require_once "./knihovna.php";


class Fixa {
    public $barva;
    public $vyrobce;

    function __construct($argBarva, $argVyrobce)
    {
        $this->barva = $argBarva;
        $this->vyrobce = $argVyrobce;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespace</title>
</head>
<body>
    <h1>Namespace</h1>
    
    <?php
    $fixa1 = new Fixa("blue", "centropen");
    var_dump($fixa1);
    
    $fixa2 = new Tony\Fixa("green",123,42);
    var_dump($fixa2);

    ?>

</body>
</html>