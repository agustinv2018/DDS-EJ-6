<?php

//Mostrar la tabla de multiplicar del 2, utilizando un for (Hasta el numero 20).
//Se debe mostrar al similar a lo siguiente.
//2 * 1 = 2
//2 * 2 = 4
//2 * 3 = 6
//...................

$n1 = 2;
$n2 = 1;
$res = $n1*$n2;


for ($n2= 1; $n2 <=20  ; $n2++) { 
    $res = $n1*$n2;
    echo $n1 . ' * ' . $n2 . ' = ' . $res;
    echo '<hr>';

}
