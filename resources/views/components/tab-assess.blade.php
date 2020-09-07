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

	@inject('AssessmentController', 'App\Http\Controllers\AssessmentController')	
	<?php $assessments = $AssessmentController::index();  ?>


	<div class="tabValoraciones">
	  <h2>Valoraciones</h2>
	    <div class="table-responsive">
	      <table class="table table-striped table-sm">
	        <thead>
	          <tr>
	            <th>#</th>
	            <th>Puntuacion</th>
	            <th>Fecha</th>
                <th>Comentario</th>
	          </tr>
	        </thead>
	        <tbody>
			@foreach($assessments as $assessment)
			  <tr>
				<td>{{ $assessment->id }}</td>
				<td>{{ $assessment->score }}</td>
				<td>{{ $assessment->date }}</td>
				<td>{{ $assessment->comment }}</td>
			  </tr>
			  @endforeach
	        </tbody>
	      </table>
	    </div>
	</div>
</div>