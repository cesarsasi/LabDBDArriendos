@inject('TransactionController', 'App\Http\Controllers\TransactionController')  
<?php $transactions = $TransactionController::index();  ?>

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

<div class="formCategoria">
	  <h2>Modificar Transacción</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="transId" class="form-control" id="exampleFormControlSelect1">
    @foreach($transactions as $transaction)
        <option>{{ $transaction->id }}</option>
        @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Medio de pago</span>
  </div>
  <select id="transMedio" class="form-control" id="exampleFormControlSelect1">
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
  <input id="transTarj" type="number" class="form-control" placeholder="Nuevo numero de tarjeta" aria-label="tarjeta" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon7">Id Usuario</span>
  </div>
  <select id="transIdUser" class="form-control" id="exampleFormControlSelect1">
    @foreach($users as $user)
        <option>{{ $user->id }}</option>
        @endforeach
    </select> 
</div>

<input type="button" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendTrans();"/>

</forms>
</div>
</div>

<script type="text/javascript">

  function sendTrans(){
    var idTrans = document.getElementById("transId").value;
    var medTrans = document.getElementById("transMedio").value;
    var tarjTrans = document.getElementById("transTarj").value;
    var idUserTrans = document.getElementById("transIdUser").value;

    $.ajax({

        type:'PUT',
        url:'/transaction/update/' + idTrans ,
        data: {
          paymentMethod : medTrans,
          card : tarjTrans,
          user_id : idUserTrans
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