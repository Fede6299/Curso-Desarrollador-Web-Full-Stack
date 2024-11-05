<?php
//1. Array
$array = [];
$indice = 0;
while($indice < 20){
    if($indice % 2 == 0){
        $array[] = $indice;
    }
    $indice++;
}

echo "Los 10 primeros números pares: <br>";
foreach ($array as $numero) {
    echo $numero . "<br>";
}

echo "<br>";

$arrayAsociativo = ["Nombre" => "Pedro", "Apellido" => "Torres", "Dirección" => "Av.Mayo 3703", "Teléfono" => 1122334455];

foreach ($arrayAsociativo as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

echo "<br>";

$ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];

foreach ($ciudades as $indice => $ciudad) {
    echo "La ciudad con el indice $indice tiene el nombre $ciudad <br>";
}

echo "<br>";

$ciudadesConIndice = ["MD" => "Madrid", "BCL" => "Barcelona", "LD" => "Londres", "NY" => "New York", "LA" => "Los Ángeles", "CH" => "Chicago"];
foreach ($ciudadesConIndice as $key => $value) {
    echo "El índice de $value es $key. <br>";
}

//2. Funciones
function calcular_perimetro_superficie($lado){
    echo "Perímetro del cuadrado basado en un lado dado: " .  4 * $lado  . "cm<br>Superficie del cuadrado basado en un lado dado: " . $lado * $lado . "cm²<br>"; ;
}
calcular_perimetro_superficie(10);

echo "<br>";
function cadena_mayuscula($cadena){
    echo strtoupper($cadena);
}
cadena_mayuscula("chiquito");

echo "<br>";

function cadena_minuscula($cadena){
    echo strtolower($cadena);
}
cadena_minuscula("GRANDE");

//C. DUDA SI INGRESA 2 COMO MES QUE DEBERÍA RETORNA SI ES 30 O 31

echo "<br>";

function palindrome($cadena){
    $cadena_sin_espacios = str_replace(' ', '', $cadena);
    $cadena_sin_espacios = strtolower($cadena_sin_espacios);
    $cadenaInversa = "";
    $longitud = strlen($cadena_sin_espacios) - 1;
    for ($i = 0; $i < strlen($cadena_sin_espacios); $i++) {
        $cadenaInversa [$i] = $cadena_sin_espacios[$longitud];
        $longitud -= 1;
    }
    return $cadena_sin_espacios === $cadenaInversa;
}

echo "<br>";

echo palindrome("Anita lava la tina") ? "Es un palindrome" : "No es un palindrome";

?>