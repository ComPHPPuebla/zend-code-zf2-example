# Ejemplo de uso del paquete zend-code de ZF2 

Este es un script que muestra como crear código a partir de un array de configuración 
usando el paquete `zend-code` de ZF2.

## Instalación

Este ejemplo se instala usando Composer. Si no tienes instalado Composer el primer paso es
instalarlo:

    curl -s http://getcomposer.org/installer | php
    
Una vez instalado creamos el proyecto:

    php composer.phar --stability="dev" create-project comphppuebla/zendcodeexample zend-code

## Modo de uso
    
Esto creará una carpeta llamada `zend-code` con los archivos de nuestro ejemplo. El 
proyecto cuenta con una carpeta `configs` que contiene el archivo `class-metadata.php`.
En dicho archivo se define una clase llamada `ComPHPPuebla\Model\User` que contiene dos
propiedades protegidas `$name` y `$age` con sus respectivos getters y setters. Además 
implementa la interfaz `\Countable` con un método `count` que siempre devuelve cero (solo
para demostrar como generar una clase que implementa una interfaz).

En el archivo `code-generator.php` se crea un objeto `FileGenerator` a partir del array
de configuración que se crea en el archivo `configs/class-metadata.php`. Después se genera
un archio `User.php` el cual se incluye usando `require` para posteriormente crear un
objeto `User` asignarle unos valores y mostrarlos en la pantalla.  

   
Para correr el ejemplo solo debes ejecutar desde la linea de comando:

    php code-generator.php