## Notas de clase

1. Si no esta la estructura del `HTML` la extensión `Live Server` no actualiza la pagina web de forma automática los cambios. Se debe hacer de forma manual, dado que no están las etiquetas `head` y `body`.

2. Tipos de rutas de URL.

    - **Ruta Absoluta**: Es una URL completa que incluye el protocolo (http, https) y el dominio. Por ejemplo:
    ```HTML
    <img src="https://www.ejemplo.com/imagenes/imagen.jpg" alt="Imagen">

    ```
    - **Ruta Relativa**: Es una ruta que se basa en la ubicación del archivo HTML. Puede ser relativa al directorio actual o a un directorio superior. Por ejemplo:
    ```HTML
    <!-- Relativa al directorio actual -->
    <img src="imagenes/imagen.jpg" alt="Imagen">

    <!-- Relativa a un directorio superior -->
    <img src="../imagenes/imagen.jpg" alt="Imagen">

    ```
    - **Ruta Externa**: Similar a la ruta absoluta, pero se refiere específicamente a una imagen que se encuentra en un servidor diferente al del sitio web actual.
    ```HTML
    <img src="https://www.otro-sitio.com/imagenes/imagen.jpg" alt="Imagen">

    ```
    - **Ruta Interna**: Se refiere a una imagen que se encuentra en el mismo servidor que el sitio web actual, utilizando una ruta relativa.
    ```HTML
    <img src="/imagenes/imagen.jpg" alt="Imagen">

    ```

3. Concepto: Minificar.