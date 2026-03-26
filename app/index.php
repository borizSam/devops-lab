<?php
##Definimos las credenciales de conexión a la base de datos, utilizando el nombre del servicio 'db' como host para que la aplicación pueda conectarse al contenedor de la base de datos.
$host = 'db';
$db   = 'testdb';
$user = 'user';
$pass = 'password';

##Aqui intentamos establecer una conexión a la base de datos utilizando PDO y mostramos un mensaje indicando si la conexión fue exitosa o si hubo un error. Esto nos permite verificar que la aplicación puede comunicarse correctamente con la base de datos dentro del entorno de Docker.
try {
    ##Esto crea una nueva instancia de PDO para conectarse a la base de datos MySQL utilizando las credenciales definidas anteriormente. Si la conexión es exitosa, se muestra un mensaje de éxito. Si ocurre un error durante la conexión, se captura la excepción y se muestra un mensaje de error con los detalles del mismo. 
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "✅ Conexión OK a la base de datos";
} catch (PDOException $e) {
    echo "❌ Error conexión: " . $e->getMessage();
}
