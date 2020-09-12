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


	@inject('UserController', 'App\Http\Controllers\UserController')	
	<?php $users = $UserController::index();  ?>

	<div class="tabProductos">
	  <h2>Usuarios</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Nombre</th>
	            <th>Apellido</th>
	            <th>Email</th>
	            <th>Contraseña</th>
	            <th>Descripción</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($users as $user)
			  <tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->lastname }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->password }}</td>
				<td>{{ $user->description }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>