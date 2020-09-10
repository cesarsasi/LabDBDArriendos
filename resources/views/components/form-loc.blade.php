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
	  <input id="locRegion" type="text" list="listaRegiones" maxlength="20" class="form-control" placeholder="Nueva Región" aria-label="region" aria-describedby="basic-addon2">
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

	<input type="submit" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendLoc();"/>
</div>
</div>

<datalist id="listaRegiones">
  <option value="Arica y Parinacota">
  <option value="Tarapacá">
  <option value="Antofagasta">
  <option value="Atacama">
  <option value="Coquimbo">
  <option value="Valparaíso">
  <option value="Metropolitana">
  <option value="O’Higgins">
  <option value="Maule">
  <option value="Ñuble">
  <option value="Biobío">
  <option value="La Araucanía">
  <option value="Los Ríos">
  <option value="Los Lagos">
  <option value="Aysén">
  <option value="Magallanes">
</datalist>

<datalist id="listaComunas">
  <option value="Talves hacerlo">
</datalist>

<script type="text/javascript">

  function sendLoc(){

    var idloc = document.getElementById("locId").value;
    var Regloc = document.getElementById("locRegion").value;
    var Comloc = document.getElementById("locComuna").value;
    var Streloc = document.getElementById("locStreet").value;

    $.ajax({

        type:'PUT',
        url:'/location/update/' + idloc ,
        data: {
          region : Regloc,
          commune : Comloc,
          street : Streloc
        },
        success: function(data){
        	window.location.reload();
        	console.log("update exitoso");
        },
        error: function(data){
          console.log("update fallido");
        }
    });
  }
</script>
