<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/registro.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container register" style="filter:alpha(opacity=50); opacity:0.9; position: absolute; z-index: 1; margin: auto 15%;">
        @if (session()->has('error'))
            <div id="error" class="alert alert-danger w-100" role="alert" style="display: none; position: absolute; z-index: 100;">
                {{session()->get('error')}}
            </div>
            <script type="text/javascript">
                $("#error").show("slow");
                setTimeout(() => {
                    $("#error").hide("slow");
                }, 5000);
            </script>
        @endif
        @if (session()->has('exito'))
            <div id="exito" class="alert alert-info w-100" role="alert" style="display: none; position: absolute; z-index: 100;">
                {{session()->get('exito')}}
            </div>
            <script type="text/javascript">
                $("#exito").show("slow");
                setTimeout(() => {
                    $("#exito").hide("slow");
                }, 5000);
            </script>
        @endif
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ asset('/img/LogoDGETI.png') }}" alt=""/>
                <h3>Bienvenido</h3>
                <p>Por favor selecciona tu modo de registro, tienes dos opciones empleado o estudiante</p>
                <a href="/">Inicia sesion si ya tienes una cuenta</a><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 200px">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Estudiantes</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <form method="POST" action="insertarMaestro">
                        @csrf
                        <h3 class="register-heading">Aplicar como empleado</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre(s) *" value="" requiered name="nombre"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno *" value="" requiered name="paterno"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido Materno *" value="" requiered name="materno"/>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="genero" value="Masculino" checked>
                                            <span> Hombre </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="genero" value="Femenino">
                                            <span> Mujer </span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Fecha de nacimiento *" value="" requiered name="nacimiento"/>
                                </div>
                                <div class="form-group">
                                    <input type="number" maxlength="10" minlength="10" class="form-control" placeholder="Numero de telefono*" value="" requiered name="telefono"/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electronico *" value="" requiered name="correo"/>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" maxlength="5" minlength="5" class="form-control" placeholder="Codigo Postal *" value="" requiered name="cp"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nivel de estudios *" value="" requiered name="nivelEstudios"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Casa de estudios *" value="" requiered name="casaEstudios"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contraseña *" value="" requiered name="contra"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Imagen *" value="" requiered name="img"/>
                                </div>
                                <div class="form-group">
                                    <textarea type="text" class="form-control" placeholder="Imagen *" value="" requiered name="desc"></textarea>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="puesto" requiered>
                                        <option class="hidden"  selected disabled>Puesto</option>
                                        <option value="Docente">Docente</option>
                                        <option value="Secretaria">Secretaria</option>
                                        <option value="Director">Director</option>
                                        <option value="Intendente">Intendente</option>
                                    </select>
                                </div>
                                <input type="submit" class="btnRegister"  value="Registrar"/>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Aplicar como estudiante</h3>
                        <form method="POST" action="insertarEstudiante">
                            @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre(s) *" value="" requiered name="nombre"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido Paterno *" value="" requiered name="paterno"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Apellido Materno *" value="" requiered name="materno"/>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline"> 
                                            <input type="radio" name="genero" value="Masculino" checked>
                                            <span> Hombre </span> 
                                        </label>
                                        <label class="radio inline"> 
                                            <input type="radio" name="genero" value="Femenino">
                                            <span> Mujer </span> 
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control" placeholder="Fecha de nacimiento *" value="" requiered name="nacimiento"/>
                                </div>
                                <div class="form-group">
                                    <input type="number" maxlength="10" minlength="10" class="form-control" placeholder="Numero de telefono*" value="" requiered name="telefono"/>
                                </div>
                            </div>
                                
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electronico *" value="" requiered name="correo"/>
                                </div>
                                <div class="form-group">
                                    <input type="number" maxlength="5" minlength="5" class="form-control" placeholder="Codigo Postal *" value="" requiered name="cp"/>
                                </div>
                                <div class="form-group">
                                    <input type="number" maxlength="8" minlength="8" class="form-control" placeholder="Numero de Control *" value="" requiered name="control"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Escuela de origen *" value="" requiered name="origen"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Contraseña *" value="" requiered name="contra"/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="nombreCarrera">
                                        <option class="hidden"  selected requiered>Por favor selecciona tu carrera</option>
                                        <option value="Alimentos ">Alimentos </option>
                                        <option value="Contabilidad">Contabilidad</option>
                                        <option value="Programacion">Programacion</option>
                                        <option value="Construccion">Construccion</option>
                                        <option value="Ofimatica">Ofimatica</option>
                                    </select>
                                </div>
                                <input type="submit" class="btnRegister"  value="Registrar"/>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>