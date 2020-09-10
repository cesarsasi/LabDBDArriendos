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
  <h2>Modificar Usuario</h2>

<div class="input-group mb-3">
  <div class="input-group-prepend ">
    <span class="input-group-text" id="basic-addon1">Id</span>
  </div>
  <input id="userId" type="text" class="form-control" placeholder="Id a Modificar" aria-label="id" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2">Nombre</span>
  </div>
  <input id="userName" type="text" maxlength="20" class="form-control" placeholder="Nuevo Nombre" aria-label="name" aria-describedby="basic-addon2">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon3">Apellido</span>
  </div>
  <input id="userLastNam" type="text" maxlength="20" class="form-control" placeholder="Nuevo Apellido" aria-label="lastname" aria-describedby="basic-addon3">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon4">Email</span>
  </div>
  <input id="userEmail" type="email" maxlength="20" class="form-control" placeholder="Nuevo Email" aria-label="email" aria-describedby="basic-addon4">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon5">Contraseña</span>
  </div>
  <input id="userPass" type="password" maxlength="500" class="form-control" placeholder="Nueva Contraseña" aria-label="pass" aria-describedby="basic-addon5">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon6">Descripción</span>
  </div>
  <input id="userDesc" type="text" maxlength="500" class="form-control" placeholder="Nueva Descripción" aria-label="descrip" aria-describedby="basic-addon6">
</div>

<button type="submit" class="btn btn-outline-dark btn-block border-dark" onclick="sendUser()">Modificar</button>
</div>
</div>

<script type="text/javascript">

  function sendUser(){

    var idUser = document.getElementById("userId").value;
    var nameUser = document.getElementById("userName").value;
    var lastUser = document.getElementById("userLastNam").value;
    var emailUser = document.getElementById("userEmail").value;
    var passUser = document.getElementById("userPass").value;
    var descUser = document.getElementById("userDesc").value;

    $.ajax({

        type:'PUT',
        url:'/user/update/' + idUser ,
        data: {
          name : nameUser,
          lastname : lastUser,
          email : emailUser,
          password : passUser,
          description : descUser
        },
        success: function(data){
          window.location.reload();
          console.log("update exitoso");
        },
        error: function(data){
          console.log("update fallido");
        }
    });
  }
</script>