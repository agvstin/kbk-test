# KBK test

## Consigna

La idea es que crees un repositorio en Laravel, lo conectes a MySQL e importes la lista de estados que te envío adjunta.
Luego que hagas un formulario con un input de tipo email, un select con los estados y un botón de submit.
La idea es registrar en una tabla de suscripciones, una lista de emails con su estado, fecha de creación y actualización.
No es importante la parte estética pero obviamente, si se ve mejor suma.

## Setup

Para inicializar la aplicación hace falta generar la base de datos e importar los datos.

Después de configurar los datos de la conexion a la base de datos en el archivo `.env`,
correr el siguiente comando para crear e inicializar la base de datos:

```
php artisan migrate --seed
```

Una vez hecho esto, la aplicación está lista para levantarse:

```
php artisan serve
```