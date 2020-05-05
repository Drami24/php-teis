
# Léeme

## Credenciales

- email -> pedidos@goiko.com
- contraseña -> goiko

## Importar la base de datos

En la carpeta sql puedes descargar la base de datos. Pasos:
- Crear una base de datos llamada pedidos
- Importar el fichero pedidos.sql con la herramienta phpmyadmin

## Instalación de PHPMailer

1. Descargar y instalar composer: https://getcomposer.org/download/
2. En la terminal en el directorio del proyecto ejecutar:

```
composer init
composer install

composer require vendor/package
composer require phpmailer/phpmailer

composer update
```

### A tener en cuenta:

1. En el archivo email.php tienes que rellenar las variables username y password del correo

2. Tienes que activar el acceso de aplicaciones poco seguras para poder enviar emails
https://myaccount.google.com/lesssecureapps
