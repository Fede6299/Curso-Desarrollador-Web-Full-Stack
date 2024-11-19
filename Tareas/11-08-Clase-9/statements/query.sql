SELECT nombre FROM usuario;
SELECT telefono FROM usuario WHERE saldo <= 300;
SELECT usuario FROM usuario WHERE nivel = 2;
SELECT nombre, telefono FROM usuario WHERE marca IN ('NOKIA', 'BLACKBERRY', 'SONY');
SELECT nombre, telefono FROM usuario WHERE marca IN ('LG', 'SAMSUNG', 'MOTOROLA');
SELECT email FROM usuario WHERE email LIKE '%gmail%';
SELECT MAX(saldo) AS SaldoMaximo FROM usuario WHERE NOW() - fechaNacimiento > 30;