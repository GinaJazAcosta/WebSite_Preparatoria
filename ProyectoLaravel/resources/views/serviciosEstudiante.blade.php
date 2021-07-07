<!DOCTYPE html>
<html>

<head>
    <title>Estudiantes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilosEstudiante.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/tarea.png') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <style>
        table {
            background-color: rgba(0, 0, 0, 0.8) !important;
        }

        table tr:hover {
            background-color: #9D2449 !important;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="btn-group btn-flotanteUsuario">
        <button type="button" class="btn dropdown-toggle text-light botonDesplegable" data-bs-toggle="dropdown"
            aria-expanded="false" style=" outline:0 !important;">
            <i class="fas fa-user"></i>
            {{ $estudiante[0]->nom_per }}&nbsp;{{ $estudiante[0]->paterno_per }}&nbsp;{{ $estudiante[0]->materno_per }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Cerrar Sesion</a></li>
        </ul>
    </div>


    <a class="btn-flotante" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample"><i class="fas fa-arrow-alt-circle-right"></i> Menú</a>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
        style="background-color:rgba(0,0,0,0.8) !important"">
 <div class=" offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"
            style="background-color:white"></button>
    </div>

    <div class="offcanvas-body">
        <div class="list-group w-100 h-100" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-dark list-group-item-action" id="btnHome" data-bs-toggle="list"
                href="#list-home" role="tab" aria-controls="list-home"
                onclick="javascript:irInicio({{ $estudiante[0]->no_control }});"><i class="fas fa-home"></i> Inicio</a>
            <a class="list-group-item list-group-item-dark list-group-item-action active" id="list-profile-list"
                data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile"><i
                    class="fas fa-id-card" onclick="javascript:irDatos({{$estudiante[0]->no_control}});"></i> Mis Datos</a>
            <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list"
                data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i
                    class="far fa-list-alt"></i>&nbsp; Servicios</a>
            <a class="list-group-item list-group-item-dark list-group-item-action" id="list-messages-list"
                data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages"><i
                    class="fas fa-sign-out-alt"></i>&nbsp;Cerrar Sesión</a>
        </div>
    </div>
    </div>

    <div class="container" id="contenedorServicios" style="transform:translateY(50px)">
        <div class="row">
            <h3 class="text-center">Selección de servicios</h3>
            <table class="table text-light rounded text-center">
                <thead>
                    <tr>
                        <th scope="col">Servicio</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $servicio)
                        <tr>
                            <td id="serv{{$servicio->cve_serv}}">{{ $servicio->nom_serv }}</td>
                            <td id="precionServ{{$servicio->cve_serv}}">${{ $servicio->precio_serv }}</td>
                            <td><button type="button" class="btn btn-outline-success btnComprar" data-id="{{$servicio->cve_serv}}"><i class="fas fa-money-bill-wave"></i> Adquirir</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    <div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-dark text-light">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">¿Comprar?</h5>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5 id="nomServicio"></h5>
                <form id="formCompra" action="javascript:comprar();">
                    @csrf
                    <input type="hidden" id="noControl" value="{{$estudiante[0]->no_control}}">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Total</label>
                      <input type="text" class="form-control" id="totalServicio" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Numero de tarjeta</label>
                      <input type="text" class="form-control" id="numTarjeta" required>
                    </div>
                    <div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button id="btnComprar" type="submit" class="btn btn-outline-success">Aceptar</button>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="{{ asset('/js/controladorDashEstudiante.js') }}"></script>

<script type="text/javascript" src="{{ asset('/js/controladorServiciosEstudiante.js')}}"></script>

</html>
