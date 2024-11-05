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

?>