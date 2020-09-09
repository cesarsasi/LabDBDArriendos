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
  <input id="descipcion" type="text" maxlength="500" class="form-control" placeholder="Nueva descripción" aria-label="descripcion" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Precio</span>
  </div>
  <input id="precio" type="number" class="form-control" placeholder="Nuevo Precio" aria-label="price" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Stock</span>
  </div>
  <input id="stock" type="number" min="0" step="1" class="form-control" placeholder="Nuevo Stock" aria-label="stock" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon5">Id Categoría</span>
  </div>
  <select id="idCatPubl" class="form-control" id="exampleFormControlSelect1">
    @foreach($categories as $category)
				<option>{{ $category->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon6">Id Ubiciación</span>
  </div>
  <select id="idLocPubl" class="form-control" id="exampleFormControlSelect1">
    @foreach($locations as $location)
				<option>{{ $location->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon7">Id Usuario</span>
  </div>
  <select id="idUserPubl" class="form-control" id="exampleFormControlSelect1">
    @foreach($users as $user)
				<option>{{ $user->id }}</option>
			  @endforeach
    </select> 
</div>

<input type="submit" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendPubl();"/>

</form>

</div>
</div>

<script type="text/javascript">

  function sendPubl(){

    var id = document.getElementById("idPubl").value;
    var description = document.getElementById("descipcion").value;
    var price = document.getElementById("precio").value;
    var stock = document.getElementById("stock").value;
    var category_id = document.getElementById("idCatPubl").value;
    var locate_id = document.getElementById("idLocPubl").value;
    var user_id = document.getElementById("idUserPubl").value;

    $.ajax({

        type:'PUT',
        url:'/publication/update/' + id ,
        data: {
		      description : description,
          price : price,
          stock : stock,
          category_id : category_id,
          locate_id : locate_id,
          user_id : user_id
        },
        success: function(data){
          console.log("update exitoso");
        }
    });
  }
</script>