@inject('LocationController', 'App\Http\Controllers\LocationController')	
<?php $locations = $LocationController::index();  ?>

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

<div class="formLoc">
	<h2>Modificar Dirección</h2>

<form>

<div class="input-group mb-3">
	  <div class="input-group-prepend ">
	    <span class="input-group-text" id="formId">Id</span>
	  </div>
	  <select id="locId" class="form-control" id="exampleFormControlSelect1">
	    @foreach($locations as $location)
					<option>{{ $location->id }}</option>
				  @endforeach
    </select>
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="formRegion">Región</span>
	  </div>
	  <select id="locRegion" class="form-control" id="exampleFormControlSelect1">
			<option>Arica y Parinacota</option>
			<option>Tarapacá</option>
			<option>Antofagasta</option>
			<option>Atacama</option>
			<option>Coquimbo</option>
			<option>Valparaíso</option>
			<option>Metropolitana</option>
			<option>O’Higgins</option>
			<option>Maule</option>
			<option>Ñuble</option>
			<option>Biobío</option>
			<option>La Araucanía</option>
			<option>Los Ríos</option>
			<option>Los Lagos</option>
			<option>Aysén</option>
			<option>Magallanes</option>
		</select>  	  
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="formcomuna">Comuna</span>
	  </div>
	  <input id="locComuna" type="text" list="listaComunas" maxlength="20" class="form-control" placeholder="Nueva Comuna" aria-label="comuna" aria-describedby="basic-addon3">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="formStreet">Calle/Pasaje</span>
	  </div>
	  <input id="locStreet" type="text" maxlength="20" class="form-control" placeholder="Nueva Direccion" aria-label="calle" aria-describedby="basic-addon4">
	</div>
	<a id="AvisoLoc"></a>
	<input type="button" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendLoc();"/>

</form>

</div>
</div>

<datalist id="listaComunas">
  <option value="Talves hacerlo">
</datalist>

<script type="text/javascript">

  function sendLoc(){
    var idloc = document.getElementById("locId").value;
    var Regloc = document.getElementById("locRegion").value;
    var Comloc = document.getElementById("locComuna").value;
    var Streloc = document.getElementById("locStreet").value;
    let aviso = "";
    let error = 0;

    if( Regloc === "" || Regloc.lenght>20){
      aviso += "E: La region no debe estar vacio, ni mayor a 20 caracteres.\n";
      error+=1;
    }
    if( Comloc === "" || Comloc.lenght>500){
      aviso += "E: La comuna no debe estar vacio, ni mayor a 20 caracteres.\n";
      error+=1;
    }
    if( Streloc === "" || Streloc.lenght>500){
      aviso += "E: La calle no debe estar vacio, ni mayor a 20 caracteres.\n";
      error+=1;
    }
    
    if(error == 0 ){
      	aviso = "Modificación Realizada Exitosamente";
	    $.ajax({
	        type:'PUT',
	        url:'/location/update/' + idloc ,
	        data: {
	          region : Regloc,
	          commune : Comloc,
	          street : Streloc
	        },
	        success: function(data){
	        	console.log("update exitoso");
	        },
	        error: function(data){
	        	console.log("update fallido");
	        }
	    });
	}
    $("#AvisoLoc").html(aviso);
  }
</script>
