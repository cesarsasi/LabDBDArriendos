@inject('PublicationController', 'App\Http\Controllers\PublicationController')
<?php $publications = $PublicationController::index();  ?>

@inject('CategoryController', 'App\Http\Controllers\CategoryController')	
<?php $categories = $CategoryController::index();  ?>

@inject('LocationController', 'App\Http\Controllers\LocationController')	
<?php $locations = $LocationController::index();  ?>

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
<div class="formPubl">
	<h2>Modificar Publicación</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="idPubl" class="form-control" id="exampleFormControlSelect1">
    @foreach($publications as $publication)
				<option>{{ $publication->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Descripción</span>
  </div>
  <input id="descripcionPubl" type="text" maxlength="500" class="form-control" placeholder="Nueva descripción" aria-label="descripcion" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Precio</span>
  </div>
  <input id="precioPubl" type="number" class="form-control" placeholder="Nuevo Precio" aria-label="price" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Stock</span>
  </div>
  <input id="stockPubl" type="number" min="0" step="1" class="form-control" placeholder="Nuevo Stock" aria-label="stock" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon5">Id Categoría</span>
  </div>
  <select id="idCatPubl" class="form-control">
    @foreach($categories as $category)
				<option>{{ $category->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon6">Id Ubiciación</span>
  </div>
  <select id="idLocPubl" class="form-control">
    @foreach($locations as $location)
				<option>{{ $location->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon7">Id Usuario</span>
  </div>
  <select id="idUserPubl" class="form-control">
    @foreach($users as $user)
				<option>{{ $user->id }}</option>
			  @endforeach
    </select> 
</div>
<a id="AvisoPub"></a>
<input type="button" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendPubl();"/>

</form>

</div>
</div>

<script type="text/javascript">

  function sendPubl(){

    var idPub = document.getElementById("idPubl").value;
    var descriptionPub = document.getElementById("descripcionPubl").value;
    var pricePub = document.getElementById("precioPubl").value;
    var stockPub = document.getElementById("stockPubl").value;
    var category_idPub = document.getElementById("idCatPubl").value;
    var locate_idPub = document.getElementById("idLocPubl").value;
    var user_idPub = document.getElementById("idUserPubl").value;
    let aviso = "";
    let error = 0;

    if( descriptionPub === "" || descriptionPub.lenght>500){
      aviso += "E: La descripción no debe estar vacio, ni mayor a 500 caracteres.\n";
      error+=1;
    }
    if( Number.isInteger(pricePub)  ||  pricePub === ""){
      aviso += "\nE: Precio no debe estar vacio.";
      error+=1;
    }
    if( Number.isInteger(stockPub) ||  stockPub === ""){
      aviso += "\nE: Stock no debe estar vacio.";
      error+=1;
    }
    if(error == 0 ){
      aviso = "Modificación Realizada Exitosamente";
      $.ajax({
          type:'PUT',
          url:'/publication/update/' + idPub ,
          data: {
  		      description : descriptionPub,
            price : pricePub,
            stock : stockPub,
            category_id : category_idPub,
            locate_id : locate_idPub,
            user_id : user_idPub
          },
          success: function(data){
            console.log("update exitoso");
          },
          error: function(data){
            console.log("update fallido");
          }
      });
    }
    $("#AvisoPub").html(aviso);
  }
</script>