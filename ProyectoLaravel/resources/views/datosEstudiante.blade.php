<!DOCTYPE html>
<html>
<head>
	<title>Estudiantes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/estilosEstudiante.css')}}">
    <link rel="shortcut icon" href="{{ asset ('img/tarea.png') }}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
    <div class="btn-group btn-flotanteUsuario">
        <button type="button" class="btn dropdown-toggle text-light botonDesplegable" data-bs-toggle="dropdown" aria-expanded="false" style=" outline:0 !important;">
        <i class="fas fa-user"></i>
        {{$estudiante[0]->nom_per}}&nbsp;{{$estudiante[0]->paterno_per}}&nbsp;{{$estudiante[0]->materno_per}}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>
        </ul>
    </div>


<a class="btn-flotante" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample"><i class="fas fa-arrow-alt-circle-right"></i> Menú</a>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color:rgba(0,0,0,0.8) !important"">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color:white"></button>
	</div>

	<div class="offcanvas-body">
		<div class="list-group w-100 h-100" id="list-tab" role="tablist">
			<a class="list-group-item list-group-item-dark list-group-item-action" id="btnHome" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home" onclick="javascript:irInicio({{$estudiante[0]->no_control}});"><i class="fas fa-home"></i> Inicio</a>
			<a class="list-group-item list-group-item-dark list-group-item-action active" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i class="fas fa-id-card"></i> Mis Datos</a>
			<a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:irServicios({{$estudiante[0]->no_control}})"><i class="far fa-list-alt"></i>&nbsp; Servicios</a>
            <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i class="fas fa-sign-out-alt"></i>&nbsp;Cerrar Sesión</a>
		</div>
	</div>
</div>

<div class="container" style="transform:translateY(50px)">
    <div class="row">
        <div class="col-md-4 col-4">
            <div class="card w-auto">
                <div class="card-header">
                    <h4 class="text-center text-light">Datos del Generales</h4>
                </div>
                <div class="card-body text-left text-light">
                    <p>Nombre(s): <i>{{$estudiante[0]->nom_per}}</i></p>
                    <p>Paterno: <i>{{$estudiante[0]->paterno_per}}</i></p>
                    <p>Materno: <i>{{$estudiante[0]->materno_per}}</i></p>
                    <p>Fecha Nacimiento: <i>{{$estudiante[0]->fecha_nac}}</i></p>
                    <p>Codigo Postal: <i>{{$estudiante[0]->cp_per}}</i></p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center text-light">Datos Escolares</h4>
                            </div>
                            <div class="card-body text-left text-light">
                                <p>No. Control: <i>{{$estudiante[0]->no_control}}</i></p>
                                <p>Carrera: <i>{{$carrera[0]->nombre_carrera}}</i></p>
                                <p>Carrera: <i>{{$carrera[0]->bachilleraro_carrera}}</i></p>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="text-center text-light">Datos de Contacto</h4>
                                </div>
                                <div class="card-body text-left text-light">
                                    <p>Número de telefono: <i>{{$estudiante[0]->telefono_per}}</i></p>
                                    <p>Correo Electronico: <i>{{$estudiante[0]->correo_per}}</i></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{asset ('/js/controladorDashEstudiante.js')}}"></script>
	</html>
