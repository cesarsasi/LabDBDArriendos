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


	@inject('TransactionController', 'App\Http\Controllers\TransactionController')	
	<?php $transactions = $TransactionController::index();  ?>

	<div class="tabProductos">
	  <h2>Transacciones</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Medio de pago</th>
	            <th>Tarjeta</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($transactions as $transaction)
			  <tr>
			  	<td>{{ $transaction->id }}</td>
			  	@if ($transaction->paymentMethod == 1)
					<td>Efectivo</td>
				@elseif ($transaction->paymentMethod == 2)
					<td>Cheque</td>
				@elseif ($transaction->paymentMethod == 3)
					<td>Debito</td>
				@elseif ($transaction->paymentMethod == 4)
					<td>Credito</td>
				@endif
				<td>{{ $transaction->card }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>