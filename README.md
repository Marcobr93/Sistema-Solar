# **Creación de la base de datos**

Utilizar el script **_sistemasolar.sql_** para construir las tablas de la base de datos, es **_necesario_** que previamente 
cree una base de datos donde **_importará este script._**

# **Instalación**

Configurar el archivo _**.env.example**_ con tus datos de acceso a la base de datos que has creado. Renombrar el _**.env.example**_ a 
_**.env**_


# **Composer**

Si usted tiene instalado en su sistema **_Composer_**, bastará con realizar el siguiente comando desde su terminal para 
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

# **Manual de uso de la aplicación**

Cuando ingrese en la página, usted no estará logeado en ningún usuario, por lo que lo sólo podrá ver la 
la **_información_** de cada planeta, usar el botón de **_Sistema Solar_** para ver la información que allí se encuentra
y poder usar la pestaña de **_Acceso_**, donde podrá logearse o registrarse en la página y poder realizar el resto de
funciones.

## **Menú de navegación**

**Se compone de 4 apartados:**

### **Inicio**

Si usted le da _click_ a **_Inicio_** en cualquier lugar de la página, este le devolverá al menú principal, donde está 
la lista de planetas.

### **Añadir Planeta**

Si usted le da _click_ a _**Añadir Planeta**_, la página entrará en una nueva sección donde podrá añadir un Planeta nuevo.

### **Sistema Solar**

Si usted le da _click_ a _**Sistema Solar**_ , la página entrará en una nueva sección donde obtendrá información acerca
del Sistema Solar.

### **Acceso**

Le permite acceder a las opciones de usuario de la página.

**Se compone de 3 apartados:**

#### **Login**

Le permite acceder con una cuenta ya creada y registrada en la **_Base de Datos_**, para ello le pedirá el email y la
contraseña de su cuenta.

#### **Registro**

Si desea registarse por primera vez o crear un nuevo usuario, esta sección se lo permite introduciendo los siguientes
datos:
- _Nombre._
- _Email._
- _Día de nacimiento._
- _Contraseña._
- _Confirmar Contraseña._

### **Recupera**

Esta sección no está implementada aún, en un futuro permitirá recuperar la contraseña de una cuenta ya creada.

## **Uso del resto de funciones**

### **Información**

Para ver la información de cada Planeta tiene **4 opciones:**

- _Click en la imagen del Planeta._
- _Click en el nombre del Planeta._
- _Click en el símbolo del Planeta._
- _Click en el botón de _información_ del Planeta._

**Una vez logeado, podrá utilizar el resto de las funciones:**

### **Editar**

Le permite editar la información de un Planeta ya creado.

### **Borrar**

Le permite borrar un Planeta ya creado.