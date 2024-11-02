Descargar el archivo adjunto [detectar-errores.html](./task/detectar-errores.html "enunciado") y poner en diferentes comentarios que indiquen los errores encontrados en esta estructura básica. **Un error puede ser el faltante de una etiqueta de cierre, un mal uso de una etiqueta, entre otras**.
Recordar que los comentarios en html se realizan de la siguiente manera => https://www.w3schools.com/html/html_comments.asp
Tips: La palabra "lang" en la etiqueta html es un atributo. Investigar de que se trata y para que sirve. 
**Les subí el archivo .html directo y por las dudas se lo subí también en un .rar por si no pueden descargar el otro. (Los archivos son los mismos, solo lo subí en dos formatos por las dudas)**

---

## Errores encontrados en el archivo `detectar-errores.html`.

- Falto agregar la etiqueta principal ``<!DOCTYPE = html>``, linea 1.
- Falta agregar ``<meta charset="UTF-8">`` para que no haya conflictos con los caracteres espaciales del español como la **ñ**.
- La etiqueta `<h1>` de la línea 4 no debe estar dentro de la etiqueta `<head>` debe estar dentro de la etiqueta `<body>`.
- Linea 5 debe usarse ``name="content"`` en lugar de ``meta="description"`` para describir el contenido de la página.
- En la etiqueta ``<meta>`` línea 6 debe usarse *name="keywords"* y no un *id*, para indicar palabras claves que queremos resaltar de nuestra página web.
- Falta la etiqueta de cierre ``</body>`` debería cerrar en la línea 26.
- Error al escribir etiquetas dos etiquetas distintas para un título, usando primero una etiqueta ``<h1>`` y cerrando con ``</h3>`` deben ser iguales.
- El orden de las etiquetas de cierre es incorrecto aunque funcione, debe ser ``</em></strong>`` en la línea 13.
- Falta etiqueta de cierre ``</p>`` para el párrafo de la línea 13.
- Linea 22, la etiqueta ``<b>`` carece de semántica, en cambio se debería usar la etiqueta ``<strong>``.
- También en la línea 22, hay un error falta la etiqueta de cierre ``<i>`` y además debe ser reemplazada por la etiqueta ``<em>``.
- Por último en la línea 25 se repite un error relacionado con el orden de cierre de las etiquetas, el orden debe ser ``</em></p>``