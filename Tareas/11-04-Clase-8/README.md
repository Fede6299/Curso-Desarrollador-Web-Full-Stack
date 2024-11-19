# PHP - Formularios
1. Se pide ingresar por un formulario el nombre de un alumno y su nota numérica. Mostrar la calificación resultante según la nota ingresada con el nombre del alumno:

```
            0-2: Muy deficiente
            3-5: Insuficiente
            6-7: Bien
            8-9: Notable
            10: Sobresaliente
```

2. Al ejercicio anterior, agregarle validaciones con php, para indicar que los datos fueron ingresados incorrectamente:

```
            - Cuando el alumno no fue ingresado.
            - Cuando la nota no fue ingresada.
            - Cuando la nota no es un número.
            - Cuando la nota no es un número entre el 0 y el 10.
```
> Mostrar un mensaje diferente para cada situación. Tip: Investigar la función isset is_numeric.