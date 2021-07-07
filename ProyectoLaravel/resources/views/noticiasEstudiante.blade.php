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

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="background-color:rgba(0,0,0,0.8) !important">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close" style="background-color:white"></button>
	</div>

	<div class="offcanvas-body">
		<div class="list-group w-100 h-100" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-dark list-group-item-action" id="btnHome" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home" onclick="javascript:irInicio({{$estudiante[0]->no_control}});"><i class="fas fa-home"></i> Inicio</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="btnDatos" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile" onclick="javascript:irDatos({{$estudiante[0]->no_control}});"><i class="fas fa-id-card"></i> Mis Datos</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:irServicios({{$estudiante[0]->no_control}});"><i class="far fa-list-alt"></i>&nbsp; Servicios</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:mostrarDocentes({{$estudiante[0]->no_control}});"><i class="fa fa-user-friends"></i>&nbsp; Empleados</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:mostrarCarreras({{$estudiante[0]->no_control}});"><i class="fa fa-list"></i>&nbsp; Carreras</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:irNoticias({{$estudiante[0]->no_control}});"><i class="fas fa-newspaper"></i> Noticias</a>

      <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:cerrarSesion();"><i class="fas fa-sign-out-alt"></i>&nbsp;Cerrar Sesión</a>
		</div>
	</div>
</div>

<div class="container" style="transform:translateY(50px)">
    <div class="row">
            @empty($noticias)
            <div class="alert alert-danger" role="alert">
                No hay nada nuevo
              </div>
            @else
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($noticias as $noticia)
            <div class="col">
              <div class="card h-100 text-light text-center">
                <img src="{{$noticia->img_noti}}" class="card-img-top" alt="{{$noticia->titulo_noti}}">
                <div class="card-body">
                  <h5 class="card-title">{{$noticia->titulo_noti}}</h5>
                  <p class="card-text">{{$noticia->descripcion_noti}}</p>
                </div>
                <div class="card-footer">
                    @csrf
                  <button id="btnIncremento" type="button" class="btn btn-outline-primary" onclick="javascript:incrementar({{$noticia->num_noti}})">Ver noticia</button>
                </div>
              </div>
            </div>
            @endforeach
            @endempty
          </div>
        </div>
    </div>
</div>

	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{asset ('/js/controladorDashEstudiante.js')}}"></script>
	</html>
