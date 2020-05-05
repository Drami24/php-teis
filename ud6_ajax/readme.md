
## Credenciales

email -> pedidos@goiko.com
contraseña -> goiko

## Instalación de PHPMailer

1. Descargar composer: https://getcomposer.org/download/
2. En una terminal en el directorio del proyecto ejecutar:

composer init
composer install

composer require vendor/package
composer require phpmailer/phpmailer

composer update

### A tener en cuenta:

Tienes que activar el acceso de aplicaciones poco seguras para poder enviar emails
https://myaccount.google.com/lesssecureapps

En la carpeta sql puedes descargar la base de datos para importarla con phpmyadmin

En el archivo email.php tienes que rellenar las variables username y password del correo