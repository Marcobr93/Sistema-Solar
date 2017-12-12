Instalación

Configurar el archivo .env.example con tus datos de acceso a la base de datos. Renombrar el .env.example a .env

Creación de la base de datos

Puedes utilizar el script sistemasolar.sql para construir las tablas de la base de datos, es necesario que previamente usted cree una base de datos para importar este script.

Composer

Si usted tiene instalado en su sistema "Composer", bastará con realizar el siguiente comando desde su terminal para instalar todas las dependencias necesarias del proyecto:

composer install

En cambio, si no lo tiene instalado, necesitará seguir los siguientes comandos para instalar todas las dependencias una a una desde su terminal:

composer require composer/composer
composer require phroute/phroute
composer require twig/twig
composer require illuminate/database
composer require vlucas/phpdotenv
composer require siriusphp/validation
composer require monolog/monolog
