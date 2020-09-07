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

	@inject('PurchaseController', 'App\Http\Controllers\PurchaseController')	
	<?php $purchases = $PurchaseController::index();  ?>	

	<div class="tabCompras">
	  <h2>Compras</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Medio de pago</th>
	            <th>Tarjeta</th>
	            <th>Fecha de inicio</th>
                <th>Fecha de vencimiento</th>
                <th>Fecha de entrega</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($purchases as $purchase)
			  <tr>
				<td>{{ $purchase->id }}</td>
				<td>{{ $purchase->paymentMethod }}</td>
				<td>{{ $purchase->card }}</td>
				<td>{{ $purchase->startdate }}</td>
				<td>{{ $purchase->finishdate }}</td>
				<td>{{ $purchase->deadline }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>