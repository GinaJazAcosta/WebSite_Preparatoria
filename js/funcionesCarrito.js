function irCarrito(){
    $("#contenedor").hide("slow");
    $("#elementosCarrito").show("slow");
    getCompras();
  }

  $("#regresar").on("click", ()=>{
    $("#elementosCarrito").hide("slow");
    $("#contenedor").show("slow");
  })
    
  var compras = new Array();
  
  const servicios = [{
      titulo:"Pago de semestre",
      ppu:900.00,
    },
    {
      titulo:"Ficha de aspirante de nuevo ingreso",
      ppu:700.00,
    },
    {
        titulo:"Examenes Extraordinario",
        ppu:150.00
    },
    {
        titulo:"Recursamientos",
        ppu:200.00
    }, 
    {
        titulo:"Constancia de estudios con promedio",
        ppu:50.00
    },
    {
        titulo:"Constancia de estudios sin promedio",
        ppu:45.00
    },
    {
        titulo:"Reposicion de credencial",
        ppu:100.00
    }];
  
  function agregarCompras(id){
    var compra = new Object();
    compra.titulo = servicios[id-1].titulo;
    compra.ppu = servicios[id-1].ppu;
    compra.total = servicios[id-1].total;
    compras.push(compra);
  }
  
  function getCompras(){
    var prods = document.querySelector("#compras");
    var totalPagar = 0;
    if (compras.length > 0) {
      prods.innerHTML = "";
      prods.innerHTML = `<table class="table table-striped table-hover table-light shadow w-100 h-100">
      <thead>
      <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Total ($)</th>
      </tr>
      </thead>
      <tbody id="renglonCompras">
      </tbody>
      </table>`;
  
      var body = document.querySelector("#renglonCompras");
      
      for (var i = 0; i < compras.length; i++) {
        body.innerHTML += `<tr id="renglon${i}" class="w-100">
        <td>${compras[i].titulo}</td>
        <td id="totalProductoCompra${i}">${compras[i].ppu}</td>
        </tr>`;
      }
    }else{
      prods.innerHTML = `<div class="alert alert-danger" role="alert">
      Aún no ha realizado compras
      </div>`;
    }
    getTotales();
  }
  
  
  function getTotales(){
    var totalPagar = 0;
    for (var i = 0; i < compras.length; i++) {
      totalPagar += parseFloat(compras[i].ppu);
    }
  
    var totalFinal = document.querySelector("#totalFinal");
    totalFinal.innerText = totalPagar.toFixed(2);
  
    var totalParcial = document.querySelector("#parcial");
    var parcial = totalPagar / 1.16;
    totalParcial.innerText = parcial.toFixed(2);
  
    var iva = document.querySelector("#iva");
    var precioIva = totalPagar - parseFloat(totalParcial.innerText);
    iva.innerText = precioIva.toFixed(2);
  }