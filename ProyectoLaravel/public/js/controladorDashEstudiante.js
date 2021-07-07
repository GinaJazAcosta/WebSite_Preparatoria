console.log("Ok");

function irDatos(control){
    location = "/datosEstudiante/"+control;
}

function irInicio(control){
  location = "/inicio/"+control;
}

function irServicios(control){
  location = "/serviciosEstudiante/"+control;
}

function irNoticias(control){
  location = "/getNoticias/"+control;
}

function cerrarSesion(){
    location = "/";
}

function incrementar(id){
    $.ajax({
        type: "POST",
        url: "/incrementarView",
        data: {
            _token: document.querySelector("input[type='hidden']").value,
            id:id,
        },
        dataType: "html",
        success: function (e) {
            console.log(e);
        }
    });
}
