<?php

function notas($nota_1){
    if($nota_1 <= 3){
        echo "Suspendido";
    } else if (($nota_1 >= 4) && ($nota_1 <= 3)){
        echo "Tercera division";
    } else if (($nota_1 >=5) && ($nota_1 <= 4)){
        echo "Segunda division";
    } else {
        echo "Primera division";
    }
}
notas(7);

?>
