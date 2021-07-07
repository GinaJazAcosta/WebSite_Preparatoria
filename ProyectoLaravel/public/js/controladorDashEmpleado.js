console.log("Ok");

function irPeriodo(id){
    location = "/insertarPeriodo/"+id;
}

function irActivos(id) {
    location = "/getActivos/"+id
}

function irEstadisticas(id){
    location = "/estadisticas/"+id;
}

function registrarPeriodo(){
    let form = document.querySelector("#formPeriodo");
    $.ajax({
        type: "POST",
        url: "/registrarPeriodo",
        data: {
            _token:document.querySelector("input[type='hidden']").value,
            periodo:form.newPeriodo.value
        },
        dataType: "html",
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(e);
        }
    });
}


function ejecutar() {
    let url;
    let form = document.querySelector("#formEstadisticos");
    switch (parseInt(form.idServicios.value)){
        case 1:
            url = "/reposicionCredencial";
            break;
        case 2:
            url = "/carreraMenosSolicitada";
            break;
        case 3:
            url = "/carreraMasSolicitada";
            break;
        case 4:
            url = "/servicioMenosUsado";
            break;
        case 5:
            url = "/alumnosSolicitanteExtraordinarios";
            break;
    }

    $.ajax({
        type: "GET",
        url: url,
        data: {_token:document.querySelector("input[type='hidden']").value},
        dataType: "json",
        success: function (e) {
            console.log(e);
            let tabla = document.querySelector("#cuerpoResultados");
            tabla.innerHTML = "";
            let codigo = "";
            e.forEach(element => {
                switch (parseInt(form.idServicios.value)){
                    case 1:
                        codigo += `<tr><td>${element.porentaje}</td></tr>`;
                        break;
                    case 2:
                        codigo += `<tr><td>${element.carrera}</td><td>${element.aspirante}</td></tr>`;
                        break;
                    case 3:
                        codigo += `<tr><td>${element.nombre_carrera}</td><td>${element.conteo}</td></tr>`;
                        break;
                    case 4:
                        codigo += `<tr><td>${element.servicio}</td><td>${element.cantidad}</td></tr>`;
                        break;
                    case 5:
                        codigo += `<tr><td>${element.extraordinarios}</td></tr>`;
                        break;
                }
            });
            tabla.innerHTML = codigo;
        },
        error: function (e){
            console.log(e);
        }
    });
}
