<?php
require_once "./knihovny/mat-funkce.php";
?>
<table border="1px solid black">
    <?php
    echo "<tr>
        <td>Polomer</td>
        <td>Obvod</td>
    </tr>";
    for ($i=0; $i<10; $i++) { 
        $polomer = rand(0,100);
        echo "<tr>";
            echo "<td>$polomer</td>";
            echo "<td>".spocitejObvodKruhu($polomer)."/td>";
    }    
    ?>
</table>
