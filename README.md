# SOAP

A continuación se muestra la implementación de un SOAP como servicio y a su vez un cliente para su consumo.

## Ejecutar

Dirigirse a la carpeta del proyecto y ejecutar el siguiente comando:

```php
php -S localhost:80
```

* Tambien puede ser ejecutado desde un servidor apache

## Uso

| Ruta | Descripción |
| ------------- | ------------- |
| `http://localhost/client.php`  | Cliente de consulta para SOAP  |
| `http://localhost/server.php?wsdl`  | Definiciones WS  |


## Respuesta del cliente
```php
Array
(
    [saludo] => Hola profesor!
    [detalles] => Array
        (
            [1] => Jorge
            [2] => Eduardo
            [3] => Giovanni
            [4] => Alonso
            [5] => Óscar
        )

)
```

## Funciones disponibles

Listado de funciones disponibles para el servicio SOAP

| Función | Respuesta | Descripción |
| ------------- | - |------------- |
| `getSaludo`  | string |Retorna un saludo  |
| `getDetalles`  | array | Retorna un listado de alumnos  |
