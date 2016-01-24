## Documentación de la aplicación :



Librerias usadas:
- `Pinpong Modules` para separar la aplicación por módulos: (https://sky.pingpong-labs.com/docs/2.1/modules).
- `Entrust` para el módulo de autenticación: (https://github.com/Zizaco/entrust).
- `Laravel-Dompdf` para los reportes en pdf: (https://github.com/barryvdh/laravel-dompdf).
- `Framework Bootstrap` para el frontend de la aplicación.

Instalación: 



Descargar o clonar el proyecto.
cmd en el carpeta de la aplicacions


`"composer update"`.

 `"php artisan key generate `".
 

configurar el archivo `".env.example`"   renombrar su extension a `".env`" y asignar la configuracion a la base de datos.
crear base de datos en mysql con nombre "mibase".



DB_DATABASE=mibase  


DB_USERNAME=root


DB_PASSWORD=

usuario "postgres" para postgres y tambien modificar en caso de postgres /config/database.php default   "mysql" sera cambiado a "postgres".



 `"php artisan app:install"`




```
Acceso al Sistema:
Role Admin:
email: admin@demo.com
password: admin123

Role Comercial:
email: comercial@demo.com
password: comercial123
```

