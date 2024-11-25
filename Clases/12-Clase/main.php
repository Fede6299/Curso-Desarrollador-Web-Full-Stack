<?php 

require_once 'Persona.php';
require_once 'Hogar.php';

$unaPersona = new Persona("Fabrizio", "Lombardo"); //INSTANCIANDO UNA NUEVA PERSONA

echo $unaPersona->getNombre();
echo "<br>";
echo $unaPersona->getApellido();
echo "<br>";

/* 
Esto se podia hacer cuando rompiamos el encapsulamiento 

$unaPersona->nombre
echo $unaPersona->nombre;
*/

$unaPersona->setNombre("Carolina");
echo $unaPersona->getNombre();

echo "<br>";

$unaPersona->setApellido("Rinaldi");
echo $unaPersona->getApellido();

echo "<br>";

$otraPersona = new Persona("Juan Ignacio", "Spadoni");
echo $otraPersona->getApellido();

$unHogar = new Hogar();
$unHogar->setDireccion("Calle Falsa 123");
echo "<br>";
echo $unHogar->getDireccion();
$unHogar->agregarHabitante($unaPersona);
$unHogar->agregarHabitante($otraPersona);
echo "<br>";
$unHogar->mostrarHabitantes();

$unaPersona->setNombre("Tomas");
$unaPersona->setApellido("Delgado Andrade");

echo "<br>";
$unHogar->mostrarHabitantes();

//GENERAR UNA COPIA 
$otraOtraPersona = new Persona($otraPersona->getNombre(), $otraPersona->getApellido());
//GENERAR UNA COPIA CON UN METODO LLAMADO DUPLICAR (TAREA!)


/*
//NO ME GENERA UNA COPIA!! SON REFERENCIAS AL MISMO ESPACIO DE MEMORIA
$otraOtraPersona = $otraPersona;
echo "<br>";
echo $otraOtraPersona->getApellido();
$otraOtraPersona->setApellido("Ponce");
echo "<br>";
echo $otraOtraPersona->getApellido();
echo "<br>";
echo $otraPersona->getApellido(); //SPADONI o PONCE?
*/

