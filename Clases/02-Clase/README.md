# CSS

### Distintas formas de aplicar ``CSS``.

1. CSS in-line: a traves del atributo `style`, donde se pueden tener distintas *declaraciones* separadas por `;`
    - Ventajas:

        - Fácil de aplicar y entender para cambios rápidos.
        - No requiere archivos adicionales.

    - Desventajas:

        - Difícil de mantener y actualizar.
        - No es reutilizable.
        - Puede hacer que el HTML sea desordenado.

2. CSS internal: ya se que lo hagas fuera de las etiqueta de `body` o en la etiqueta de `head`.
    - Ventajas:

        - Útil para estilos específicos de una sola página.
        - No requiere archivos adicionales.

    - Desventajas:

        - No es reutilizable en otras páginas.
        - Puede hacer que el archivo HTML sea más grande.

3. CSS extern: es la forma correcta de trabajar con `CSS`.
    - Ventajas:

        - Reutilizable en múltiples páginas.
        - Facilita el mantenimiento y la actualización.
        - Mantiene el HTML limpio y organizado.

    - Desventajas:

        - Requiere una solicitud HTTP adicional.
        - No es ideal para cambios rápidos y específicos.

----

4. Color: existen distintos formas de expresar un color en `CSS` mediante **rgb**, **hexadecimal**, **nombres**, y ademas indicar la opacidad que tiene un rango entre 0-1.

5. Existen selectores por *ids*, *etiquetas*, *absolutos* y por *clases*.