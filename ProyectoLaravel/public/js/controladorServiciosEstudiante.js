var modal = new bootstrap.Modal(document.getElementById('modal'));
$(".btnComprar").on('click', (e)=>{
    let boton = document.getElementById("serv"+e.target.dataset.id);
    let total = document.getElementById("precionServ"+e.target.dataset.id);
    document.querySelector("#nomServicio").innerHTML= boton.innerText;
    document.querySelector("#totalServicio").value = total.innerText;
    modal.show();
});


function comprar(){
    let form = document.querySelector("#formCompra");
    let servicios = document.querySelector("#nomServicio");

    $.ajax({
        type: "POST",
        url: "/compraEstudiante",
        data: {
            _token: document.querySelector("input[type='hidden']").value,
            control: document.querySelector("#noControl").value,
            total: (form.totalServicio.value).split('$')[1],
            servicio: servicios.innerText
        },
        dataType: "html",
        success: function (e) {
            modal.hide();
            alert("Adquisicion correcta.");
        },
        error: function (e){
            alert("Ha ocurrido un error");
        }
    });
}
