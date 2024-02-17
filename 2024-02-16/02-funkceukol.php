<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>funkce</h1>


    <?php
    function funkce($argCislo,$argString){
        if($argCislo % 2 == 0 && $argString == "sude"){
            return true;
        }else if($argCislo % 2 != 0 && $argString == "liche"){
            return true;
        }else{
            return false;
        }
    }

    var_dump(funkce(8,"liche"));
    echo "<br>";
    var_dump(funkce(8,"sude"));
    echo "<br>";
    var_dump(funkce(7,"sude"));
    echo "<br>";
    var_dump(funkce(5,"liche"));





    echo "<h2>2nd</h2>";


    function seradit($poleCisel){
        $serazenePole=[];
        $min = $poleCisel[0];
        $pocitadlo = 0;
        $index=0;
        $reindexPole=[];
        // prochazime pole do te doby dokud v nem jsou polozky
        while(count($poleCisel)>=1){
            // najdeme minimum v poli, ulozime jeho index a prepiseme minimum
            foreach($poleCisel as $cislo){
                if($cislo < $min || ($cislo == $min && count($poleCisel)==1)){
                    $min=$cislo;
                    $index=$pocitadlo;
                }
                // reindexujeme pole a prepiseme
                $reindexPole = array_values($poleCisel);
                $poleCisel = $reindexPole;
                $pocitadlo++;
            }
            // pridame minimum z pole do noveho pole a smazeme ze stareho pole
            $serazenePole[]=$min;
            unset($poleCisel[$index]);
            // nastavime hodnotu minimum na prvni polozku pole a zaroven zkontrolujeme jestli tam polozka jeste je
            if(count($poleCisel)!=0){
                $min=$poleCisel[0];
            }
            $pocitadlo=0;
        }   
    return $serazenePole;
    }
    $poleCisel=[5,1,2,3];
    var_dump($poleCisel);
    var_dump(seradit($poleCisel));









    ?>
</body>
</html>