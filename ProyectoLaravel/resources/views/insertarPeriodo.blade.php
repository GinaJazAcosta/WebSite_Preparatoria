<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{asset('/css/estilosEstudiante.css')}}">
    <link rel="icon" type="image/png" href="{{asset('/img/tarea.png')}}">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
<body>
    <div class="btn-group btn-flotanteUsuario">
        <button type="button" class="btn dropdown-toggle text-light botonDesplegable" data-bs-toggle="dropdown" aria-expanded="false" style=" outline:0 !important;">
            <i class="fas fa-user"></i>
          {{$empleado[0]->nom_per}}&nbsp;{{$empleado[0]->paterno_per}}&nbsp;{{$empleado[0]->materno_per}}
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
			<a class="list-group-item list-group-item-dark list-group-item-action active" id="btnHome" data-bs-toggle="list" href="#list-home" onclick="" role="tab" aria-controls="list-home"><i class="fas fa-home"></i> Inicio</a>
			<a class="list-group-item list-group-item-dark list-group-item-action" id="btnDatos" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile" ><i class="fas fa-calendar-alt"></i> Registrar Periodo</a>
			<a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:irActivos({{$empleado[0]->cve_emp}});"><i class="fas fa-user-graduate"></i> Lista de Estudiantes Activos</a>
			<a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" onclick="javascript:irEstadisticas({{$empleado[0]->cve_emp}})"><i class="fas fa-chart-pie"></i> Estadisticas</a>
            <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages" ><i class="fas fa-sign-out-alt"></i>&nbsp;Cerrar Sesión</a>
		</div>
	</div>
</div>

    <div class="container">
        <div class='row'>
        <div class="col-md-8">
            <div class="card h-100 ">
                <div class="card-header">
                    <h4 class="text-center text-light">Registro de nuevo periodo</h4>
                </div>
                <div class="card-body text-center text-light">
                   <form id="formPeriodo" action="javascript:registrarPeriodo();">
                       @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Periodo</label>
                        <input type="text" class="form-control" id="newPeriodo" required>
                      </div>
                      <div class="d-grid gap-2 col-6 mx-auto">
                          <button type="sumbit" class="btn btn-outline-success">Registrar</button>
                      </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

	</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="{{asset ('/js/controladorDashEmpleado.js')}}"></script
	</html>
