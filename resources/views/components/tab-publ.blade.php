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

	@inject('PublicationController', 'App\Http\Controllers\PublicationController')	
	<?php $publications = $PublicationController::index();  ?>


	<div class="tabPublicaciones">
	  <h2>Publicaciones</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Descripcion</th>
	            <th>Precio</th>
                <th>Stock</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($publications as $publication)
			  <tr>
				<td>{{ $publication->id }}</td>
				<td>{{ $publication->description }}</td>
				<td>{{ $publication->price }}</td>
				<td>{{ $publication->stock }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>