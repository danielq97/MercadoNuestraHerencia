Este es un proyecto web creado en [Laravel] (https://laravel.com)


Instalar composer

``` bash
composer install
```
Una vez instalado composer, debemos crear la base de datos.

Correr las migraciones para crear la Base de datos

Para volver a correr las migraciones, ejecutar:

    php artisan migrate:fresh
    
    
Para hacer seed de la tabla de datos, ejecutar:

    composer dump-autoload

Y después:

    php artisan db:seed


Para iniciar el proyecto
```
php artisan serve
```