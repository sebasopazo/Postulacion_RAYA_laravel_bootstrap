# Postulacion_RAYA_laravel_bootstrap
Landing page hecha en html + bootstrap y unido en laravel

Una vez clonado el repositorio realizar:

1)composer install
2)renombrar env.example a .env
3)crear la application key con el comando php artisan key:generate

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

Usuario admin:
email = admintest@admin.cl
contraseña = password
