@inject('PurchaseController', 'App\Http\Controllers\PurchaseController')	
<?php $purchases = $PurchaseController::index();  ?>\

@inject('PublicationController', 'App\Http\Controllers\PublicationController')
<?php $publications = $PublicationController::index();  ?>

@inject('UserController', 'App\Http\Controllers\UserController')	
<?php $users = $UserController::index();  ?>

<style type="text/css">
	.input-group>.input-group-prepend {
	    flex: 0 0 20%;
	}
	.input-group .input-group-text {
	    width: 75%;
	}
</style>

<div>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	  <h1 class="h2">Dashboard</h1>
	  <div class="btn-toolbar mb-2 mb-md-0">
	    <div class="btn-group mr-2">
	      <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
	      <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
	    </div>
	    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
	      <span data-feather="calendar"></span>
	      This week
	    </button>
	  </div>
	</div>
	
<div class="formPurch">
	<h2>Modificar Compra</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="idPurch" class="form-control" id="exampleFormControlSelect1">
    @foreach($purchases as $purchase)
				<option>{{ $purchase->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Medio de Pago</span>
  </div>
  <select id="pagoPurch" class="form-control" id="exampleFormControlSelect1">
      <option value=1>Efectivo</option>
      <option value=2>Cheque</option>
      <option value=3>Debito</option>
      <option value=4>Credito</option>
    </select>   
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Tarjeta</span>
  </div>
  <input id="tarjetaPurch" type="number" class="form-control" placeholder="Nuevo numero de tarjeta" aria-label="tarjeta" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Fecha de incio</span>
  </div>
  <input id="inicio" type="date" class="form-control" placeholder="Nueva fecha de inicio" aria-label="inicio" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Fecha de vencimiento</span>
  </div>
  <input id="venci" type="date" class="form-control" placeholder="Nueva fecha de vencimiento" aria-label="vencimiento" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Fecha de entrega</span>
  </div>
  <input id="entrega" type="date" class="form-control" placeholder="Nueva fecha de entrega" aria-label="entrega" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon5">Id Publicación</span>
  </div>
  <select id="idPublPurch" class="form-control" id="exampleFormControlSelect1">
    @foreach($publications as $publication)
				<option>{{ $publication->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon7">Id Usuario</span>
  </div>
  <select id="idUserPurch" class="form-control" id="exampleFormControlSelect1">
    @foreach($users as $user)
				<option>{{ $user->id }}</option>
			  @endforeach
    </select> 
</div>

<input type="submit" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendPurch();"/>

</forms>

</div>
</div>

<script type="text/javascript">

  function sendPurch(){

    var id = document.getElementById("idPurch").value;
    var paymentMethod = document.getElementById("pagoPurch").value;
    var card = document.getElementById("tarjetaPurch").value;
    var startdate = document.getElementById("inicio").value;
    var finishdate = document.getElementById("venci").value;
    var deadline = document.getElementById("entrega").value;
    var user_id = document.getElementById("idPublPurch").value;
    var publication_id = document.getElementById("idUserPurch").value;

    if(paymentMethod == "Efectivo" ){
      paymentMethod = 1;
    } else if(paymentMethod == "Cheque"){
      paymentMethod = 2;
    } else if(paymentMethod == "Debito"){
      paymentMethod = 3;
    } else if(paymentMethod == "Credito"){
      paymentMethod = 4;
    }

    $.ajax({

        type:'PUT',
        url:'/purchase/update/' + id ,
        data: {
          paymentMethod : paymentMethod,
          card : card,
          startdate : startdate,
          finishdate : finishdate,
          deadline : deadline,
          user_id : user_id,
          publication_id : publication_id
        },
        success: function(data){
          console.log("update exitoso");
        },
        error: function(data){
          console.log("update fallido");
        }
    });
  }
</script>