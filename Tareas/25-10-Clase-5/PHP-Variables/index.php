<?php

// 1. Conversión Celsius a Fahrenheit.
define("CELSIUS", 20);
$temp_Fahrenheit = CELSIUS * 9/5 + 32;

echo "20ºC Celsius a grados Fahrenheit = " . $temp_Fahrenheit . "<br>";

// 2. Perímetro y área.

// longitud [cm]
define("BASE", 18);
define("ALTURA", 12);
define("RADIO", 30);

// Perímetro y área de un rectángulo
$perimetro_rectangulo = 2 * (BASE + ALTURA);
$area_rectangulo = BASE * ALTURA;

echo "Perímetro del rectángulo: " . $perimetro_rectangulo . " cm<br>";
echo "Área del rectángulo: " . $area_rectangulo . " cm²<br>";

// Perímetro y área de un círculo
$perimetro_circulo = 2 * pi() * RADIO;
$area_circulo = pi() * pow(RADIO, 2);

echo "Perímetro del círculo: " . $perimetro_circulo . " cm<br>";
echo "Área del círculo: " . $area_circulo . " cm²<br>"
?>