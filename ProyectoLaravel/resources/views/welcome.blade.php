<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tabla de servicios</title>

    <style>
    h1{
        margin: 50px;
        text-align: center;
    }
    thead{
        text-align: center;
    }
    tr:hover {
        color:#3f0416;
        font-weight: bold;
    }
    .table{
        background-color: #815462de;
    }
    </style>
</head>
<body>
    <h1><a href="/">Inicia sesion</a><br/></h1>
        <h1>Tabla de servicios para la preparatoria:  <a href="https://www.getpostman.com/collections/1fd5984f62e8f3d450f5">Archivo json para probar en postman</a></h1>
            
        <table class="table">
            <thead>
              <tr>
                <th scope="col">URL</th>
                <th>Metodo</th>
                <th scope="col">Uso</th>
                <th scope="col">parametro</th>
                <th scope="col">Ejemplo</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/insertarCarrera </th>
                <td>POST </td>
                <td>Inserta en la BD los datos de una
                    carrera</td>
                <td>nombre,
                    descripcion,
                    imagen,
                    bachillerato</td>
                    <td>{
                        “nombre”: “Programacion”,
                        “descripcion”:”La carrera[...]”,
                        “imagen”:”https://imagen.png”,
                        “bachillerato”:”Fisico-Matematico”
                        }
                    </td>
              </tr>
              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/eliminarCarrera </th>
                <td>GET </td>
                <td>Modifica el estatus de la carrera
                    a 0
                    </td>
                <td>nombre</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/eliminarCarrera?nombre=Programacion
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/sacarCarreras </th>
                <td>GET </td>
                <td>Saca todas las carreras con
                    estatus de 1
                    </td>
                <td>ninguno</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/sacarCarreras
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/modificarCarrea </th>
                <td>POST </td>
                <td>Modifica la descripción e imagen
                    de la carrera
                    </td>
                <td>descripcion,img,nombre</td>
                    <td>
                        {
                            “nombre”:”Programacion”,
                            "descripcion":"Lugar donde aprendes a programar",
                            "img":"http://imagen.jpg"
                        }
                            
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/insertarEstudiante </th>
                <td>POST </td>
                <td>Inserta en la BD los datos del estudiante
                    </td>
                <td>nombre,
                    paterno,
                    materno,
                    genero,
                    nacimiento,
                    telefono,
                    correo,
                    cp,
                    control,
                    origen,
                    contra,
                    nombrecarrea,</td>
                    <td>
                        {
                            “nombre”: “Edwin”,
                            “paterno": “Silva”,
                            “materno”: “Escutia”,
                            “genero”:”Masculino”,
                            “nacimiento”: “1999-10-07",
                            “telefono”: ”7151236996”,
                            “correo”: “eddySilva@gmail.com”,
                            “cp”: “61500”,
                            “control”: “17650079”,
                            “origen”: “Morelos”
                            “contra”: “12345”,
                            “nombreCarrea”: “Programacion”
                            }
                            
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/eliminarEstudiante </th>
                <td>GET </td>
                <td>Cambia el estatus de un estudiante a 0
                    </td>
                <td>control</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/eliminarEstudiante?control=17650079
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerEstudiantes </th>
                <td>GET </td>
                <td>Saca todos los estudiantes con estatus de 1
                    </td>
                <td>ninguno</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerEstudiantes 
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerEstudiante </th>
                <td>GET </td>
                <td>Obtiene un estudiante cuyo estatus este en 1
                    </td>
                <td>control</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerEstudiante?control=17650079
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerEstudiantesCarrera </th>
                <td>GET </td>
                <td>Obtiene todos los estudiantes de una carrera cuyo estatus este en 1
                    </td>
                <td>nombre</td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerEstudiantesCarrera?nombre=Programacion
                        
                    </td>
              </tr>

              
              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/insertarNoticia </th>
                <td>POST </td>
                <td>Inserta en la base de datos una noticia nueva
                    </td>
                <td>nombre,descripcion,imagen</td>
                    <td>
                        {
                            “nombre”: “Competencia 2021”,
                            “descripcion”: “Descripción noticia”,
                            “imagen”:”url”}
                        
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/modificarNoticia </th>
                <td>POST </td>
                <td>Modifica el titulo, descripcion e imagen de la noticia
                    </td>
                <td>titulo,
                    desc,
                    img,
                    id
                    </td>
                    <td>
                        {
                            “titulo”: ”Competencias interescolares”,
                            “desc”: ”Competencias insterescolaes [..]”,
                            “img”:”url”,
                            “id”:1
                            }
                        
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/incrementarVistas </th>
                <td>POST </td>
                <td>Incrementa las vistas
                    </td>
                <td>
                    id
                    </td>
                    <td>
                        {
                        “id”:1
                        }
                        
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerNoticias </th>
                <td>GET </td>
                <td>Saca todas las noticias con
                    estatus en 1                    
                    </td>
                <td>
                    ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerNoticias
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/eliminarNoticia  </th>
                <td>GET </td>
                <td>Cambia el estatus de la noticia a
                    0
                    </td>
                <td>
                    id
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public//eliminarNoticia?id=1
                    </td>
              </tr>


              
              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/insertarMaestro  </th>
                <td>POST </td>
                <td>Inserta un maestro en la base de datos
                    </td>
                <td>
                    nombre,
                    paterno,
                    materno,
                    genero,
                    nacimiento,
                    telefono,
                    correo,
                    cp,
                    nivelestudios,
                    casaestudios,
                    contra,
                    img,
                    desc,
                    puesto
                    </td>
                    <td>
                        {
                            “nombre” : ”Luis Alberto”,
                            “paterno": “Colin”,
                            “materno”: “Zuñiga”,
                            “genero”:”Masculino”,
                            “nacimiento”: ‘1999-04-27",
                            “telefono”:”7861402363”,
                            “correo”:”lcolin@gmail.com”,
                            “cp”:”61427”,
                            “nivelEstudios":”Licenciatura”,
                            “casaEstudios”:”ITZ”,
                            “contra”:”12345”,
                            “img”:”img.jpg”,
                            “desc”:”Bueno en lo que hace [...]”,
                            “puesto”:”docente”
                            }
                            
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/eliminarMaestro   </th>
                <td>GET </td>
                <td>Cambia el estatus de maestro a 0
                    </td>
                <td>
                    clave
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/eliminarMaestro?clave=1
                            
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerMestros   </th>
                <td>GET </td>
                <td>Obtiene todos los maestros con estatus de 1
                    </td>
                <td>
                    ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerMestros
                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorSemestre  </th>
                <td>GET </td>
                <td>Obtiene todos los estudiantes registrados para el semestre
                    </td>
                <td>
                    periodo
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorSemestre?periodo=AGOSTO-DICIEMBRE 2021
                    </td>
              </tr>

              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorCarrera
                     </th>
                <td>GET </td>
                <td>Obtiene los aspirantes por carrera
                    </td>
                <td>
                    periodo,carrera
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerAspirantesPorCarrera?periodo=AGOSTO-DICIEMBRE2021&carrera=Contabilidad

                    </td>
              </tr>



              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/porcentajeGenero
                     </th>
                <td>GET </td>
                <td>Obtiene el porcentaje de hombres y mujeres por periodo
                    </td>
                <td>
                   sexo,periodo
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/porcentajeGenero?sexo=MASCULINO&periodo=AGOSTODICIEMBRE 2021


                    </td>
              </tr>


              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/carreraMasSolicitada 
                     </th>
                <td>GET </td>
                <td>Obtiene la(s) carrera(s) que mas aspirantes ha tenido
                    </td>
                <td>
                   ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/carreraMasSolicitada 
                    </td>
              </tr>

              
              <tr>
                <th scope="row">http://31.220.62.39/API/PREPA/public/carreraMenosSolicitada 
                     </th>
                <td>GET </td>
                <td>Obtiene la(s) carrera(s) que menos aspirantes ha tenido
                    </td>
                <td>
                   ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/carreraMenosSolicitada
                    </td>
              </tr>

              <tr>
                <th >http://31.220.62.39/API/PREPA/public/porcentajeReposicionCreden
                    cial 
                     </th>
                <td>GET </td>
                <td>Obtiene el porcentaje de los estudiantes que solicitan una reposición de credencial
                </td>
                <td>
                   ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public//porcentajeReposicionCredencial

                    </td>
              </tr>



              
              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarAspirante
                    cial 
                     </th>
                <td>POST </td>
                <td>Inserta un nuevo aspirante en la base de datos
                </td>
                <td>
                    nombre,
                    paterno,
                    materno,
                    genero,
                    nacimiento,
                    telefono,
                    correo,
                    cp,
                    curp,
                    nombrecarrera,
                    periodo
                    
                    </td>
                    <td>
                        {
                            “nombre” : ”Irvin Raul”,
                            “paterno": “Rodriguez”,
                            “materno”: “Clemente”,
                            “genero”:”Masculino”,
                            “nacimiento”: ‘2006-04-27",
                            “telefono”:”7151402363”,
                            “correo”:”raulrodriguez@gmail.com”,
                            “cp”:”61512”,
                            “curp":”ROCI060427”,
                            “nombreCarrera”:”Contabilidad”,
                            “periodo”:”AGOSTO-DICIEMBRE 2021”,
                            }

                    </td>
              </tr>

              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerAspirante 
                     </th>
                <td>GET </td>
                <td>Obtener un aspirante por su
                    número de solicitud
                    
                </td>
                <td>
                    solicitud
                    
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerAspirante?solic
                        itud=4

                    </td>
              </tr>




              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerAspirantes
                     </th>
                <td>GET </td>
                <td>Obtener todos los aspirantes de
                    un periodo determinado
                </td>
                <td>
                    periodo
                    
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerAspirantes?periodo=AGOSTO-DICIEMBRE 2021

                    </td>
              </tr>



              <tr>
                <th >http://31.220.62.39/API/PREPA/public/alumnosSolicitanteMateriaRecursamiento
                     </th>
                <td>POST</td>
                <td>Obtener el porcentaje de
                    alumnos que han solicitado el
                    recursamiento de X materia.
                </td>
                <td>
                    materia
                    
                    </td>
                    <td>
                        {
                            “materia”:”Calculo Diferencial”
                        }

                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/alumnosSolicitanteExtraordinarios
                    
                     </th>
                <td>GET</td>
                <td>Obtiene la cantidad de
                    recursamientos que se tiene
                    registrados hasta la fecha
                </td>
                <td>
                    ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/alumnosSolicitanteExtraordinarios
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/servicioMenosUsado
                    
                     </th>
                <td>GET</td>
                <td>Obtiene el o los servicios
                    escolares que no han sido
                    solicitados muy poco
                    
                </td>
                <td>
                    ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/servicioMenosUsado
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarMateria
                    
                     </th>
                <td>POST</td>
                <td>Insertar a la BD una nueva
                    materia
                    
                </td>
                <td>
                    materia,status

                    </td>
                    <td>
                        {
                            "nombre_materia": "TICS",
                            "status_materia": 1
                            }
                           
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/modificarMateria
                    
                     </th>
                <td>POST</td>
                <td>Obtener modificar los datos de
                    una materia especifica
                    
                </td>
                <td>
                    materia,
                    status,
                    id
                    

                    </td>
                    <td>
                        {
                            "nombre_materia": "TICS",
                            "status_materia": 1,
                            "id_materia": 6
                            }
                            
                    </td>
              </tr>





              <tr>
                <th >http://31.220.62.39/API/PREPA/public/darBajaMateria
                    
                     </th>
                <td>GET</td>
                <td>Cambiar el estatus de una
                    materia para darla de baja
                    
                </td>
                <td>
                    materia 
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/darBajaMateria?materia=Ingles I
                    </td>
              </tr>





              <tr>
                <th >http://31.220.62.39/API/PREPA/public/darAltaMateria
                    
                     </th>
                <td>GET</td>
                <td>Cambiar el estatus de una
                    materia para darla de alta
                    
                </td>
                <td>
                    materia 
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/darAltaMateria?materia=Ingles I
                    </td>
              </tr>


              
              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerMateria 
                    
                     </th>
                <td>GET</td>
                <td>Recuperar los datos de
                    determinada materia
                    
                </td>
                <td>
                    materia 
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerMateria?materia=Calculo Diferencial
                    </td>
              </tr>



                 
              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerMaterias 
                    
                     </th>
                <td>GET</td>
                <td>Obtener todas las materias
                    registradas
                </td>
                <td>
                    ninguno
                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerMaterias 
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarServicio 
                    
                     </th>
                <td>POST</td>
                <td>Registrar un nuevo servicio a la
                    base de datos.
                </td>
                <td>
                    nombre,
                    descripcion,
                    precio,
                    status,
                    tipo
                    </td>
                    <td>
                        {
                            "cve_serv": 3,
                            "nom_serv": "Constancia de estudios con
                            promedio",
                            "descripcion_serv": "Se da una constancia de
                            estudios con promedio",
                            "precio_serv": 180,
                            "estados_serv": 1,
                            "tipo_serv": "Administrativa"
                            }
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/modificarServicio
                    
                     </th>
                <td>POST</td>
                <td>Modificar los datos de un servicio
                    obtenido.
                    
                </td>
                <td>
                    nombre,
                    descripcion,
                    precio,
                    status,
                    tipo,
                    id

                    </td>
                    <td>
                        {
                            "nom_serv": "Constancia de estudios con
                            promedio",
                            "descripcion_serv": "Se da una constancia de
                            estudios con promedio",
                            "precio_serv": 180,
                            "estados_serv": 1,
                            "tipo_serv": "Administrativa",
                            "cve_serv": 3
                            }
                            
                    </td>
              </tr>

              
              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerServicio 
                    
                     </th>
                <td>GET</td>
                <td>Recuperar los datos de un
                    servicio por su nombre
                    
                </td>
                <td>
                    servicio 

                    </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerServicio?servicio=Constancia de estudios con promedio
                    </td>
              </tr>



              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerServicios 
                    
                     </th>
                <td>GET</td>
                <td>Extraer todos los registros de
                    servicios de la BD
                </td>
                <td>
                    ninguno 
                </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerServicios
                    </td>
              </tr>



              <tr>
                <th >http://31.220.62.39/API/PREPA/public/darBajaServicio
                    
                     </th>
                <td>GET</td>
                <td>Cambiar el estatus de un servicio
                    para darlo de baja a través de su
                    nombre 
                </td>
                <td>
                    servicio
                </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/darBajaServicio?servicio=Constancia de estudios con promedio

                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/darAltaServicio
                    
                     </th>
                <td>GET</td>
                <td>Cambiar el estatus de un servicio
                    para darlo de alta a través de su
                    nombre
                    
                </td>
                <td>
                    servicio
                </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/darAltaServicio?servicio=Constancia de estudios con promedio

                    </td>
              </tr>




              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarRecibo 
                    
                     </th>
                <td>POST </td>
                <td>Inserta un nuevo recibo y a la vez
                    llena sus filas
                    
                </td>
                <td>
                    control.
                    total,
                    servicio,
                    unidades
                </td>
                    <td>
                        {
                            "control": "17650079",
                            "total": "400",
                            "servicio": “1”,
                            “unidades”:”7”
                        }
                    </td>
              </tr>


              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarPeriodo
                    
                     </th>
                <td>POST </td>
                <td>Inserta un nuevo periodo en la
                    bd
                    
                </td>
                <td>
                    periodo 
                </td>
                    <td>
                        {
                            “periodo”:”AGOSTO-DICIEMBRE 2020”
                            }
                    </td>
              </tr>



              
              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarRecursamiento 
                    
                     </th>
                <td>POST </td>
                <td>Inserta un nuevo recursamiento
                    en la bd
                    
                </td>
                <td>
                    materia,
                    docente,
                    periodo,
                    recibo
                    
                </td>
                    <td>
                        {
                            "materia": "1",
                            "docente": "1",
                            "periodo”: “1”,
                            “recibo”:”1”
                            }
                            
                    </td>
              </tr>




              <tr>
                <th >http://31.220.62.39/API/PREPA/public/insertarExtraordinario 
                    
                     </th>
                <td>POST </td>
                <td>Inserta un nuevo examen
                </td>
                <td>
                    materia
                    empleado
                    periodo
                </td>
                    <td>
                        {
                            "materia": "1",
                            "docente": "1",
                            "periodo”: “1”
                            }
                            
                    </td>
              </tr>

              <tr>
                <th >http://31.220.62.39/API/PREPA/public/obtenerExtras 
                    
                     </th>
                <td>GET </td>
                <td>Saca todos los examenes en
                    curso
                    
                </td>
                <td>
                   ninguno
                </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/obtenerExtras 
                    </td>
              </tr>



              <tr>
                <th >http://31.220.62.39/API/PREPA/public/terminarExamen
                    
                     </th>
                <td>GET </td>
                <td>Termina un examen
                    
                </td>
                <td>
                    id
                </td>
                    <td>
                        http://31.220.62.39/API/PREPA/public/terminarExamen?id=1
                    </td>
              </tr>
            </tbody>
        </table>
</body>
</html>