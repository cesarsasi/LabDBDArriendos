@inject('ProductController', 'App\Http\Controllers\ProductController')	
<?php $products = $ProductController::index();  ?>

@inject('PublicationController', 'App\Http\Controllers\PublicationController')	
<?php $publications = $PublicationController::index();  ?>

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
	  <h2>Modificar Producto</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="idProd" class="form-control">
    @foreach($products as $product)
				<option>{{ $product->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Nombre</span>
  </div>
  <input id="nombre" type="text" maxlength="20" class="form-control" placeholder="Nuevo nombre" aria-label="nombre" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Disponibilidad</span>
  </div>
  <select id="disp" class="form-control">
      <option value=0>No</option>
      <option value=1>Si</option>
    </select>  
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Id publicación</span>
  </div>
  <select id="idPublProd" class="form-control" >
    @foreach($publications as $publication)
				<option>{{ $publication->id }}</option>
			  @endforeach
    </select> 
</div>

<input type="submit" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendProd();"/>

</form>

</div>
</div>

<datalist id="numerosDisp">
  <option value="0">
  <option value="1">
</datalist>

<script type="text/javascript">

  function sendProd(){

    var id = document.getElementById("idProd").value;
    var name = document.getElementById("nombre").value;
    var availability = document.getElementById("disp").value;
    var publication_id = document.getElementById("idPublProd").value;

    $.ajax({

        type:'PUT',
        url:'/product/update/' + id ,
        data: {
		  name : name,
          availability : availability,
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