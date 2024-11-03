<?php

// 1.
$n = 2;

if ($n >= 10 || $n < 2) {
    echo "El número ingresado es mayor o igual a 10 o menor a 2<br>";
}
else {
    echo "El número ingresado no pudo ser validado<br>";
}

// 2.
echo "números del 9 al 1:<br>";
for ($i=9; $i > 0; $i--) {
    echo "<strong>$i</strong>" . " ";
}

echo "<br>";

$acumulador = 0;
$acumulador_pares = 0;

echo "* Números impares del 1 al 20:<br>";
for ($numero = 1; $numero < 21; $numero++) {
    if($numero % 2 != 0) {
        echo "<strong>$numero</strong>" . " ";
    }
    else {
        $acumulador_pares += $numero;
    }
    $acumulador += $numero;
}

echo "<br>";

echo "* La suma de los números del 1 al 20: " ."<strong>$acumulador</strong>";
echo "<br>";
echo "* La suma de los números pares del 1 al 20: " ."<strong>$acumulador_pares</strong>";
?>
