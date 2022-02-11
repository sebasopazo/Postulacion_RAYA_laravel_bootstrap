# Postulacion_RAYA_laravel_bootstrap
Landing page hecha en html + bootstrap y unido en laravel

Inicializar XAMP (apache + mysql)

Para asegurar un buen funcionamiento de laravel usar comando:
composer dump-autoload

Para iniciar el proyecto en local usar comando:
php artisan serve

Para crear las tablas de la base de datos usar comando:
php artisan migrate

Para poblar las tablas de la base de datos usar comando:
php artisan db:seed

Para regresar al estado inicial o freshstart usar comando:
php artisan migrate:fresh --seed
(borrara las tablas y creara todo denuevo ademas de poblar)
