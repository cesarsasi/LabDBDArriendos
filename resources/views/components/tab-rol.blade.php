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


	@inject('RolController', 'App\Http\Controllers\RolController')	
	<?php $rols = $RolController::index();  ?>

	<div class="tabProductos">
	  <h2>Roles</h2>
	  <h6 align="right">1 = Arrendatario, 2= Publicador y Arrendador, 3 = Administrador</h6>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Tipo</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($rols as $rol)
			  <tr>
				<td>{{ $rol->id }}</td>
				<td>{{ $rol->type }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>