<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Inicio de secion</title>
    <link rel="stylesheet" href="{{ asset('/css/registro.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container contene" style="position: absolute; z-index: 1; margin: 10% 10%">
    @if (session()->has('error'))
        <div id="error" class="alert alert-danger w-100" role="alert" style="display: none; position: absolute; z-index: 100;">
            {{session()->get('error')}}
        </div>
        <script type="text/javascript">
            $("#error").show("slow");
            setTimeout(() => {
                $("#error").hide("slow");
            }, 2500);
        </script>
    @endif
        <div class="col-md-12">
            <div class="card" style="filter:alpha(opacity=50); opacity:0.8;background-color:black;">
                <div class="card-body">
                    <div class="row">
            <div class="col-md-4">
                <h3>inicia sesión o <a href="registro">Registrate</a></h3>
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
            </div>
        </div>
        <div class="login-or">
            <hr class="hr-or">
            <span class="span-or">o</span>
        </div>
        <form role="form" id="formularioAcceso" method="POST" action="validacion">
            @csrf
            <div class="form-group">
            <label for="inputUsernameEmail">Nombre de usuario o correo</label>
            <input type="text" class="form-control" id="inputUsernameEmail" name="user">
            </div>
            <div class="form-group">
            <label for="inputPassword">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword" name="pass">
            <a class="pull-right" href="#">Olvidaste tu contraseña?</a>
            </div>
            <div class="checkbox pull-right">
                <label>
                    <input type="checkbox"> Recordar datos 
                </label>
            </div>
            <button type="submit" class="btn btn btn-primary" style="background-color: #9D2449;width:100%">
                Entrar
            </button>
        </form>

            </div>
            <div class="col-md-8">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('/img/aviso.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/desfile.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('/img/sep.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block"></div>
        </div>
    </div>
    </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
    <footer></footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>