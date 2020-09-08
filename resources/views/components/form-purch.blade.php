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
	
<div class="formPurch">
	<h2>Modificar Compra</h2>
<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <input type="text" class="form-control" placeholder="Id a Modificar" aria-label="id" aria-describedby="basic-addon1">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Metodo de Pago</span>
  </div>
  <input type="text" class="form-control" placeholder="Nueva Region" aria-label="region" aria-describedby="basic-addon2">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Precio</span>
  </div>
  <input type="text" class="form-control" placeholder="Nuevo Precio" aria-label="price" aria-describedby="basic-addon3">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Stock</span>
  </div>
  <input type="text" class="form-control" placeholder="Nuevo Stock" aria-label="stock" aria-describedby="basic-addon4">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon5">Id Categoria</span>
  </div>
  <input type="text" class="form-control" placeholder="Asignar Categoria" aria-label="categoria" aria-describedby="basic-addon5">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon6">Id Ubiciación</span>
  </div>
  <input type="text" class="form-control" placeholder="Asignar Ubiciación" aria-label="location" aria-describedby="basic-addon6">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon7">Id Usuario</span>
  </div>
  <input type="text" class="form-control" placeholder="Asignar Usuario" aria-label="user" aria-describedby="basic-addon7">
</div>
<button type="submit" class="btn btn-outline-dark btn-block border-dark" v-on:click="login($event)">Modificar</button>
</div>
</div>