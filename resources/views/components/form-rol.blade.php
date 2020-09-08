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
	  <h2>Modificar Rol</h2>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <input type="text" class="form-control" placeholder="Id a Modificar" aria-label="id" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Tipo</span>
  </div>
  <input type="number" min="1" max="3" step="1" list="numerosRol" class="form-control" placeholder="Nuevo tipo" aria-label="tipo" aria-describedby="basic-addon2">
</div>

<button type="submit" class="btn btn-outline-dark btn-block border-dark" v-on:click="login($event)">Modificar</button>
</div>
</div>

<datalist id="numerosRol">
  <option value="1">
  <option value="2">
  <option value="3">
</datalist>