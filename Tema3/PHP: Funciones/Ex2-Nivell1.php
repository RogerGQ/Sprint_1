<?php

function contar($numero){
    for ($i = 0; $i < $numero; $i++) {
        echo $i++;
        echo "<br/>";
    }
}

contar(12);