@inject('CategoryController', 'App\Http\Controllers\CategoryController')	
<?php $categories = $CategoryController::index();  ?>

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
	  <h2>Modificar Categoría</h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="idCat" class="form-control">
    @foreach($categories as $category)
				<option>{{ $category->id }}</option>
			  @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Nombre</span>
  </div>
  <input id="nombreCat" type="text" maxlength="20" class="form-control" placeholder="Nuevo nombre" aria-label="nombre" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Tipo</span>
  </div>
  <input id="tipoCat" type="text" maxlength="20" class="form-control" placeholder="Nuevo tipo" aria-label="tipo" aria-describedby="basic-addon3">
</div>
<a id="Aviso"></a>
<input  id="enviarcat" type="buttom" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendCat();"/>

</form>

</div>
</div>
<script type="text/javascript">

  function sendCat(){

    var id = document.getElementById("idCat").value;
    var name = document.getElementById("nombreCat").value;
    var type = document.getElementById("tipoCat").value;
    let aviso = "";
    let error = 0;

    if( name === "" || name.lenght>20){
      aviso += "E: Nombre categoria no debe estar vacio ni mayor a 20 caracteres.\n"
      error+=1;
    }
    if( type === "" || name.lenght>20){
      aviso += "\nE: Tipo categoria no debe estar vacio ni mayor a 20 caracteres"
      error+=1;
    }
    if(error == 0 ){
      aviso = "Modificación Realizada Exitosamente";
      $.ajax({

        type:'PUT',
        url:'/category/update/' + id ,
        data: {
          name : name,
          type : type
        },
        success: function(data){
          console.log("update exitoso");
        },
        error: function(data){
          console.log("update fallido");
        }
    });
    }
    $("#Aviso").html(aviso);
  }
</script>