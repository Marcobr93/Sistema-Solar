# Instalación

Configurar el archivo .env.example con tus datos de acceso a la base de datos. Renombrar el .env.example a .env

# Creación de la base de datos

Puedes utilizar el script sistemasolar.sql para construir las tablas de la base de datos, es necesario que previamente 
usted cree una base de datos para importar este script.

# Composer

Si usted tiene instalado en su sistema _Composer_, bastará con realizar el siguiente comando desde su terminal para 
instalar todas las dependencias necesarias del proyecto:
```
composer install
```
En cambio, si no lo tiene instalado, necesitará seguir los siguientes comandos para instalar todas las dependencias una 
a una desde su terminal:
```
composer require composer/composer 
composer require phroute/phroute 
composer require twig/twig 
composer require illuminate/database 
composer require vlucas/phpdotenv 
composer require siriusphp/validation 
composer require monolog/monolog
```
Una vez realizados los pasos anteriores, ya estará listo para utilizar la aplicación.

# Manual de uso de la aplicación

Cuando ingrese en la página, usted no estará logeado en ningún usuario, por lo que lo único que podrá hacer es ver la 
la información de cada planeta y poder usar la pestaña de _Acceso_ para logearse o registrarse en la página y poder
realizar el resto de usos.

## Menú de navegación

Se compone de 3 apartados:

### Sistema Solar

Si usted le da _click_ a Sistema Solar en cualquier lugar de la página, este le devolverá al menú principal de la página,
donde están la lista de planetas.

### Añadir Planeta

Si usted le da _click_ a Añadir Planeta la página entrará en una nueva sección donde podrá añadir un Planeta nuevo.

### Acceso

Le permite acceder a las opciones de usuario de la página.

Se compone de 3 apartados:

#### Login

Le permite acceder con una cuenta ya creada y registrada en la _Base de Datos_, para ello le pedirá el email y la
contraseña de su cuenta.

#### Registro

Si desea registarse por primera vez o crear un nuevo usuario, esta sección se lo permite introduciendo los siguientes
datos:
- Nombre.
- Email.
- Día de nacimiento.
- Contraseña.
- Confirmar Contraseña.

### Recupera

Esta sección no está implementada aún, en un futuro permitirá recuperar la contraseña de una cuenta ya creada.

## Uso del resto de funciones

Como he mencionado anteriormente, si usted no está logeado sólo podrá utilizar la sección de ver información de un
planeta y la opción de _logearse_ o _registrarse_ en la página.

### Información

Para ver la información de cada Planeta tiene 4 opciones:

- Click en la imagen del Planeta.
- Click en el nombre del Planeta.
- Click en el símbolo del Planeta.
- Click en el botón de _información_ del Planeta.

Una vez logeado, podrá utilizar el resto de las funciones:

### Editar

Le permite editar la información de un Planeta ya creado.

### Borrar

Le permite borrar un Planeta ya creado.

