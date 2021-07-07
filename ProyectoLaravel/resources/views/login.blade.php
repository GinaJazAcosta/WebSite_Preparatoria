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

    <div class="container register" style="position: absolute; z-index: 1; margin: 10% 20%; filter:alpha(opacity=50); opacity:0.9; width: 60%">
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
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ asset('/img/LogoDGETI.png') }}" alt=""/>
                <h2>Panel De Acceso</h2>
                <a href="/registro">Registrate si no tienes cuenta</a><br/><br/><br/>
                <a href="/welcome">Documentación del <br> API-REST</a><br/>
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
                        <form method="POST" action="accesoEmpleado">
                            @csrf
                        <h3 class="register-heading">Acceder como empleado</h3>
                        <div class="row register-form">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" value="" name="email" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" value="" name="passE" required/>
                                </div>
                                <input type="submit" class="btnRegister"  value="Acceder"/>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading">Acceder como estudiante</h3>
                        <form method="POST" action="accesoEstudiante">
                            @csrf
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Número de control" name="control" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" value="" name="passA" required/>
                                    </div>
                                    <input type="submit" class="btnRegister"  value="Acceder"/>
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