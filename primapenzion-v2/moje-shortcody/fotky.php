<?php
    $slozka = "./upload/source/fotogalerie/";
    $poleNazvu = scandir($slozka);
    foreach ($poleNazvu as $fotka) {
        if($fotka == "." || $fotka == ".."){
            continue;
        }
        echo "<a href='#'><img src='{$slozka}{$fotka}' alt=''></a>";
    }
?>