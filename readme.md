Este es un proyecto web creado en [Laravel] (https://laravel.com)

Pre-requisitos para el funcionamiento de este proyecto:
    1. Tener instalado XAMPP.
    2. Tenes instalado Laravel.
    3. Tener instalado PHP.

Para correr el proyecto

Instalar depedencias de composer en el proyecto

``` bash
composer update
```
Una vez instaladas las dependencias del proyecto, debemos crear la base de datos.

Para crear las tablas necesarias para que el proyecto funcione.

    php artisan migrate

Ante cualquier cambio en las migraciones, volver  a correrlas con el comando:

    php artisan migrate:fresh
    
    
Para hacer seed de la tabla de datos, ejecutar:

    composer dump-autoload

Y después:

    php artisan db:seed


Para iniciar el proyecto en el servidor de desarrollo:
```
php artisan serve
```

Para ver documentación sobre el despliguen en AWS Elastic Beanstalk [ver el siguiente video] (https://www.youtube.com/watch?v=W4aDBygslW8)