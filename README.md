Resty Skeleton Application
==========================

Este es un esqueleto básico que te permitirá crear aplicaciones Restfull usando Resty de forma rápida y sensilla.

Crear una aplicación con Resty
------------------------------

Resty usa [Composer](http://getcomposer.com) para crear un nuevo proyecto

    $ composer create-proyect restyphp/resty-skeleton path/to/install

Simplemente reemplaza `path/to/install` por el directorio en donde quieras crear la aplicación.

Estructura propuesta para una aplicación Resty
----------------------------------------------

* cache: Directorio para almacenar todos los caches
* config: Directorio donde se encuentran los archivos de configuración para los distintos ambientes
* logs: Directorio para almacenar todos los logs
* src: Directorio para los fuentes de tu aplicación
* tests: Directorio para tus tests
* web: Directorio público
