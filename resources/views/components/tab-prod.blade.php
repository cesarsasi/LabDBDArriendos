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
	
	@inject('ProductController', 'App\Http\Controllers\ProductController')	
	<?php $products = $ProductController::index();  ?>

	<div class="tabProductos">
	  <h2>Productos</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Nombre</th>
	            <th>Disponibilidad</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($products as $product)
			  <tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				@if ($product->availability == 0)
					<td>No</td>
				@elseif ($product->availability == 1)
					<td>Si</td>
				@endif
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>