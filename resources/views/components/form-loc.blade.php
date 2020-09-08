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
	    <span class="input-group-text" id="basic-addon1">Id</span>
	  </div>
	  <input type="text" class="form-control" placeholder="Id a Modificar" aria-label="id" aria-describedby="basic-addon1">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon2">Región</span>
	  </div>
	  <input type="text" list="listaRegiones" maxlength="20" class="form-control" placeholder="Nueva Región" aria-label="region" aria-describedby="basic-addon2">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon3">Comuna</span>
	  </div>
	  <input type="text" list="listaComunas" maxlength="20" class="form-control" placeholder="Nueva Comuna" aria-label="comuna" aria-describedby="basic-addon3">
	</div>

	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="basic-addon4">Calle/Pasaje</span>
	  </div>
	  <input type="text" maxlength="20" class="form-control" placeholder="Nueva Direccion" aria-label="calle" aria-describedby="basic-addon4">
	</div>

	<button type="submit" class="btn btn-outline-dark btn-block border-dark" v-on:click="login($event)">Modificar</button>
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
