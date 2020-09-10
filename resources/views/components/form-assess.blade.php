@inject('AssessmentController', 'App\Http\Controllers\AssessmentController')	
<?php $assessments = $AssessmentController::index();  ?>

@inject('PublicationController', 'App\Http\Controllers\PublicationController')	
<?php $publications = $PublicationController::index();  ?>

@inject('PurchaseController', 'App\Http\Controllers\PurchaseController')	
<?php $purchases = $PurchaseController::index();  ?>

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
	  <h2>Modificar Valoración</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="idAssess" class="form-control" id="exampleFormControlSelect1">
    @foreach($assessments as $assessment)
				<option>{{ $assessment->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Puntuación</span>
  </div>
  <select id="puntuacion" class="form-control" id="exampleFormControlSelect1">
      <option value=1>1</option>
      <option value=2>2</option>
      <option value=3>3</option>
      <option value=4>4</option>
      <option value=5>5</option>
    </select>  
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Comentario</span>
  </div>
  <input id="comentario" type="text" maxlength="500" class="form-control" placeholder="Nuevo comentario" aria-label="comentario" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Fecha</span>
  </div>
  <input id="fechaAssess" type="date" class="form-control" placeholder="Nueva fecha" aria-label="fecha" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Id Publicación</span>
  </div>
  <select id="idPublAssess" class="form-control" id="exampleFormControlSelect1">
    @foreach($publications as $publication)
				<option>{{ $publication->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Id Compra</span>
  </div>
  <select id="idCompAssess" class="form-control" id="exampleFormControlSelect1">
    @foreach($purchases as $purchase)
				<option>{{ $purchase->id }}</option>
			  @endforeach
    </select> 
</div>
<input type="submit" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendAssess();"/>
</form>

</div>
</div>



<script type="text/javascript">

  function sendAssess(){

    var id = document.getElementById("idAssess").value;
    var score = document.getElementById("puntuacion").value;
    var comment = document.getElementById("comentario").value;
    var date = document.getElementById("fechaAssess").value;
    var publication_id = document.getElementById("idPublAssess").value;
    var purchase_id = document.getElementById("idCompAssess").value;



    $.ajax({

        type:'PUT',
        url:'/assessment/update/' + id ,
        data: {
          score : score,
          date : date,
          comment : comment,
          publication_id : publication_id,
          purchase_id : purchase_id
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

