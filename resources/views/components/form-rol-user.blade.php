@inject('RolUserController', 'App\Http\Controllers\RolUserController')	
<?php $rolusers = $RolUserController::index();  ?>

@inject('RolController', 'App\Http\Controllers\RolController')  
<?php $roles = $RolController::index();  ?>

@inject('UserController', 'App\Http\Controllers\UserController')	
<?php $users = $UserController::index();  ?>

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
	  <h2>Modificar Rol del Usuario </h2>

<form>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <select id="rolId" class="form-control">
    @foreach($rolusers as $rolUser)
        <option>{{ $rolUser->id }}</option>
        @endforeach
    </select> 
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Rol</span>
  </div>
  <select id="rolTipo" class="form-control" id="exampleFormControlSelect1">
      <option value=1>Arrendatario</option>
      <option value=2>Arrendatario y Publicador</option>
      <option value=3>Administrador</option>
    </select>   
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">User</span>
  </div>
  <select id="rolUser" class="form-control" id="exampleFormControlSelect1">
    @foreach($users as $user)
				<option>{{ $user->id }}</option>
			  @endforeach
    </select>   
</div>

<a id="avisoRolUser"></a>
<input type="button" class="btn btn-outline-dark btn-block border-dark" value="Modificar"  onclick="sendRol();"/>

</form>

</div>
</div>

<script type="text/javascript">

  function sendRol(){

    var id = document.getElementById("rolId").value;
    var roltype = document.getElementById("rolTipo").value;
    var rolUser = document.getElementById("rolUser").value;
    let aviso = "";
    let error = 0;

    if(error == 0 ){
      aviso = "Modificación Realizada Exitosamente";
      $.ajax({

          type:'PUT',
          url:'/rolUser/update/' + id ,
          data: {
              rol_id: roltype,
              user_id: rolUser,
          },
          success: function(data){
            console.log("update exitoso");
          },
          error: function(data){
            console.log("update fallido");
          }
      });
    }
    $("#avisoRolUser").html(aviso);
  }
</script>