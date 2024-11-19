<?php

$usuario = $_GET["usuario"];
$nota = $_GET['nota'];

function errores ($nota, $alumno) {
    if (empty($alumno)) {
        echo "Error: El alumno no fue ingresado.";
        return true;
    }
    if (empty($nota)) {
        echo "Error: El nota no fue ingresada.";
        return true;
    }
    if (!is_numeric($nota)) {
        echo "Error: la nota no es un número.";
        return true;
    }
    if ($nota < 0 || $nota > 10) {
        echo "Error: la nota no es un número entre el 0 y el 10.";
        return true;
    }
    else return false;
}

function mensaje_nota ($nota, $mensaje) {
    $mensaje = "";
    if ($nota >= 0 && $nota <= 2) {
        $mensaje = 'Muy deficiente';
    }
    if ($nota >= 3 && $nota <= 5) {
        $mensaje = 'Insuficiente';
    }
    if ($nota >= 6 && $nota <= 7) {
        $mensaje = 'Bien';
    }
    if ($nota >= 8 && $nota <= 9) {
        $mensaje = 'Notable';
    }
    if ($nota == 10) {
        $mensaje = 'Sobresaliente';
    }
    return $mensaje;
}

function nota_alumno($nota, $alumno) {
    $mensaje = mensaje_nota ($nota, $alumno);
    if (!errores($nota, $alumno)) {
        echo "Nota - Alumno: $mensaje - $alumno";
    }
}

nota_alumno($nota, $usuario);

?>