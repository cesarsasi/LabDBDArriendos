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


	@inject('RolUserController', 'App\Http\Controllers\RolUserController')	
	<?php $rolUsers = $RolUserController::index();  ?>

	<div class="tabRolUser">
	  <h2>Roles</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Rol</th>
	            <th>Usuario</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($rolUsers as $rolUser)
				<tr>
				<td>{{ $rolUser->id }}</td>
				<td>{{ $rolUser->rol_id }}</td>
				<td>{{ $rolUser->user_id }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>