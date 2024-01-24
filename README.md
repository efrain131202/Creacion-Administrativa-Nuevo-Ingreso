-localhos: http://localhost/simple_stock/

-vistaWeb: http://localhost/simple_stock/

-Credenciales: admin1 y contraseña: 12345678

-hacer cambios necesarios en ventanas de alerta y otras cuestiones

--Instalacion--

Instalación en windows (servidor local)

1- Descargar los archivos fuentes del sistema

2- Copiar y descomprimir el archivo en la carpeta c:\xampp\htdocs, al final tendras una carpeta llamada “simple_stock”, a la cual podrás acceder desde el navegador como: http://localhost/simple_stock/

3- Crear una base de datos usando PHPMyAdmin accediendo a la url siguiente: http://localhost/phpmyadmin/

4- Importar las tablas de la base de datos para ello vamos a buscar el archivo "simple_stock.sql" en el directorio root de nuestro sistema, una vez localizado procedemos a hacer la importación de los datos desde PHPMyAdmin

5- Configurar los datos de conexión a la base de datos editando el archivo de configuración que se encuentra en la siguiente ruta: simple_stock/config/db.php
