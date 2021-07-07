# WebSite_Preparatoria
Implementacion de los servicios para la web de la preparatoria, creados en laravel 7, creados con el proposito para un mejor mantenimiento a la aplicacion,
Creada por:
-Luis Alberto Colin Zuñiga
-Gina Jazmin Acosta Duran
-Edwin Jesus Silva Escutia
*/ APLICACION WEB SOBRE UNA PREPARATORIA/*
Para su correcto uso e implementacion por favor instale todas las dependicas necesarias con la instruccion de *composer install* es necesario tener laragon o composer instalado previamente,
en caso de no tenerlo favo de dirigirse al siguiente link e instalarlo https://laragon.org/download/ para descagar laragon o https://getcomposer.org/download/ obtener composer, debe de tener en cuenta que la aplicacion esta desarrollada para funcionar en un servidor con la version 7 de PHP,
como se esta consumiendo una API favor de instalar el cliente HTTP ejecutando la siguiente instruccion en la terminal *composer require guzzlehttp/guzzle*,
recuerde configurar el archivo de configuracion de aplicacion *.env* agregando el endpoint correcto el cual es *http://31.220.62.39/API/PREPA/public/*,
es posible que al momento de clonar el proyecto no venga el archvio de configuracion *.env* sino un archivo llamado *.env-example* o algo similar, en ese caso por favor 
copie dicho archivo y pego en la carpeta raiz de la aplicacion cambia el nombre antes dicho y coloque *.env* no olvide agregar el endpoint anteriormente dicho,
en caso de que solo quiera probar los servicios proporcionados le otorgamos la posibilidad de usarlos en POSTMAN con el siguiente link https://www.getpostman.com/collections/1fd5984f62e8f3d450f5
solo importe la coleccion via URL en POSTMAN.

*/Importación de los servicios a POSTMAN via URL/*
Para este paso solo necesitamos tener postman instalados en caso de no tenerlo favor de dirigirse al siguiente link *https://www.postman.com/* siga las instruccion de instlacion o
en caso contrario revise un tutorial para la instalacion del programa, una ves instalado abrá la aplicación en la parte superior izquierda en la barra de navegacion superior abajo
aparece *my workspace* del lado derecho tiene dos opciones *new e import* favor de click en la opcion de *import* le tendria que aparecer una ventana, navegue a la pestaña de *link*
y pegue la url https://www.getpostman.com/collections/1fd5984f62e8f3d450f5 esto deberia crearle una coleccion con todos los servicios disponibles.

*/Lista de los endpoint/*
*/Metodos via POST*
http://31.220.62.39/API/PREPA/public/insertarCarrera

http://31.220.62.39/API/PREPA/public/modificarCarrea

http://31.220.62.39/API/PREPA/public/insertarEstudiante

http://31.220.62.39/API/PREPA/public/insertarNoticia

http://31.220.62.39/API/PREPA/public/modificarNoticia

http://31.220.62.39/API/PREPA/public/incrementarVistas

http://31.220.62.39/API/PREPA/public/insertarMaestro

http://31.220.62.39/API/PREPA/public/insertarRecibo

http://31.220.62.39/API/PREPA/public/insertarPeriodo

http://31.220.62.39/API/PREPA/public/insertarRecursamiento

http://31.220.62.39/API/PREPA/public/insertarExtraordinario

http://31.220.62.39/API/PREPA/public/alumnosSolicitanteMateriaRecursamiento

http://31.220.62.39/API/PREPA/public/modificarServicio

http://31.220.62.39/API/PREPA/public/insertarServicio

http://31.220.62.39/API/PREPA/public/insertarMateria

http://31.220.62.39/API/PREPA/public/modificarMateria

http://31.220.62.39/API/PREPA/public/insertarAspirante

*/Metodos via GET/*
http://31.220.62.39/API/PREPA/public/eliminarCarrera

http://31.220.62.39/API/PREPA/public/sacarCarreras

http://31.220.62.39/API/PREPA/public/obtenerEstudiantes

http://31.220.62.39/API/PREPA/public/obtenerEstudiante

http://31.220.62.39/API/PREPA/public/eliminarEstudiante

http://31.220.62.39/API/PREPA/public/obtenerEstudiantesCarrera

http://31.220.62.39/API/PREPA/public/obtenerNoticias

http://31.220.62.39/API/PREPA/public/eliminarNoticia

http://31.220.62.39/API/PREPA/public/obtenerMaestros

http://31.220.62.39/API/PREPA/public/eliminarMaestro

http://31.220.62.39/API/PREPA/public/porcentajeGenero

http://31.220.62.39/API/PREPA/public/porcentajeReposicionCredencial

http://31.220.62.39/API/PREPA/public/obtenerExtras

http://31.220.62.39/API/PREPA/public/terminarExamen

http://31.220.62.39/API/PREPA/public/carreraMasSolicitada

http://31.220.62.39/API/PREPA/public/alumnosSolicitanteExtraordinarios

http://31.220.62.39/API/PREPA/public/servicioMenosUsado

http://31.220.62.39/API/PREPA/public/carreraMenosSolicitada

http://31.220.62.39/API/PREPA/public/obtenerServicios

http://31.220.62.39/API/PREPA/public/obtenerServicio

http://31.220.62.39/API/PREPA/public/darBajaServicio

http://31.220.62.39/API/PREPA/public/obtenerMaterias

http://31.220.62.39/API/PREPA/public/obtenerMateria

http://31.220.62.39/API/PREPA/public/darBajaMateria

http://31.220.62.39/API/PREPA/public/obtenerAspirantes

http://31.220.62.39/API/PREPA/public/obtenerAspirante

http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorSemestre

http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorCarrera

Para poder obtener ejemplos de como utilizar todos los endpoint le porporcionamos dos opciones, la primera es que lo revise en POSTMAN su funcionamiento o la segunda es
ir a la siguiente direccion http://31.220.62.39/API/PREPA/public/ en esta direccion deberia encontrar una tabla con todos los servicios y algunos ejemplos.

*/ERRORES/*
En caso de errores o mal funcionamiento favor de contactar a los desorrallodres a los siguiente correos
ginacosta99.1@gmail.com 
edwin.jesus.silva@gmail.com
Lcolinzuniga7@gmail.com
Tambien puede ver las cuentas de github de los desarrolladores
GinaJazAcosta
LuisColin27
eddy-Sillva


