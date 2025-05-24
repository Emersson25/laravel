*-- REQUISITOS --*
PHP 8.1 o superior
Composer (https://getcomposer.org/)
Laravel 10
MySQL
Git
Opcional: Postman 
*//////////////////////////
Instalación paso a paso
//////////////////////////*
composer create-project laravel/laravel proyecto

Se edito el archivo .env para configurar la conexión con tu base de datos:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_base_de_datos
DB_USERNAME=dblaravel1
DB_PASSWORD=contraseña

Ejecucion de las Migraciones
php artisan migrate

Para levantar el servidor Local
php artisan serve