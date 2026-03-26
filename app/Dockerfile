##Imangen a construir usamos la imagen que contiene apache y php 8.2
FROM php:8.2-apache

##Instalamos las dependencias necesarias para la aplicación y pdo_mysql para que php pueda conectarse a mysql conexion generica y no tener problemas con versiones de mysql.
RUN docker-php-ext-install pdo pdo_mysql

##Copiamos el codigo de la aplicación al directorio raíz del servidor apache dentro del contenedor.
COPY . /var/www/html