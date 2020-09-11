<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Grupo2-dbd">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Admin</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Laboratorio Dbd </a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="btn btn-outline-light border-whithe btn-sm" href="/">Menu principal</a>
        </li>
      </ul>
    </nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample1">
                Tabla Categoria
            </a>
            </p>
            <div class="collapse" id="collapseExample1">
              <div class="card card-body">
                <a id = "hideShowTabCat" class="nav-link active" onclick="ShowHideTabCat()" >Visualizar tabla</a>
                <a id = "hideShowFormCat" class="nav-link active" onclick="ShowHideFormCat()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample2">
                Tabla Producto
            </a>
            </p>
            <div class="collapse" id="collapseExample2">
              <div class="card card-body">
                <a id = "hideShowTabProd" class="nav-link active" onclick="ShowHideTabProd()">Visualizar tabla</a>
                <a id = "hideShowFormProd" class="nav-link active" onclick="ShowHideFormProd()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample3">
                Tabla Publicacion
            </a>
            </p>
            <div class="collapse" id="collapseExample3">
              <div class="card card-body">
                <a id = "hideShowTabPubl" class="nav-link active" onclick="ShowHideTabPub()">Visualizar tabla</a>
                <a id = "hideShowFormPubl" class="nav-link active" onclick="ShowHideFormPub()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample4">
                Tabla Ubicacion
            </a>
            </p>
            <div class="collapse" id="collapseExample4">
              <div class="card card-body">
                <a id = "hideShowTabLocat" class="nav-link active" onclick="ShowHideTabLocat()">Visualizar tabla</a>
                <a id = "hideShowFormLocat" class="nav-link active" onclick="ShowHideFormLocat()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample5" role="button" aria-expanded="false" aria-controls="collapseExample5">
                Tabla Valoraciones
            </a>
            </p>
            <div class="collapse" id="collapseExample5">
              <div class="card card-body">
                <a id = "hideShowTabAssess" class="nav-link active" onclick="ShowHideTabVal()">Visualizar tabla</a>
                <a id = "hideShowFormAssess" class="nav-link active" onclick="ShowHideFormVal()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample6">
                Tabla Compras
            </a>
            </p>
            <div class="collapse" id="collapseExample6">
              <div class="card card-body">
                <a id = "hideShowTabPurch" class="nav-link active" onclick="ShowHideTabComp()">Visualizar tabla</a>
                <a id = "hideShowFormPurch" class="nav-link active" onclick="ShowHideFormComp()">Editar tupla de datos</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample7" role="button" aria-expanded="false" aria-controls="collapseExample7">
                Tabla Usuarios
            </a>
            </p>
            <div class="collapse" id="collapseExample7">
              <div class="card card-body">
                <a id = "hideShowTabUser" class="nav-link active" onclick="ShowHideTabUser()">Visualizar tabla</a>
                <a id = "hideShowFormUser" class="nav-link active" onclick="ShowHideFormUser()">Editar tupla de datos</a>
              </div>
          </li>

          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
            Tabla Transacción
            </a>
            </p>
            <div class="collapse" id="collapseExample8">
              <div class="card card-body">
                <a id = "hideShowTabTrans" class="nav-link active" onclick="ShowHideTabTrans()">Visualizar tabla</a>
                <a id = "hideShowFormTrans" class="nav-link active" onclick="ShowHideFormTrans()">Editar tupla de datos</a>
              </div>
          </li>

          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample9" role="button" aria-expanded="false" aria-controls="collapseExample9">
            Tabla Roles
            </a>
            </p>
            <div class="collapse" id="collapseExample9">
              <div class="card card-body">
                <a id = "hideShowTabRol" class="nav-link active" onclick="ShowHideTabRol()">Visualizar tabla</a>
                <a id = "hideShowFormRol" class="nav-link active" onclick="ShowHideFormRol()">Editar tupla de datos</a>
              </div>
          </li>

          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample10" role="button" aria-expanded="false" aria-controls="collapseExample10">
            Tabla Roles de Usuario
            </a>
            </p>
            <div class="collapse" id="collapseExample10">
              <div class="card card-body">
                <a id = "hideShowTabRolUser" class="nav-link active" onclick="ShowHideTabRolUser()">Visualizar tabla</a>
                <a id = "hideShowFormRolUser" class="nav-link active" onclick="ShowHideFormRolUser()">Editar tupla de datos</a>
              </div>
          </li>
          
        </ul>
      </div>
    </nav>

    <div id="tabCat" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-cat/>
    </div>
    <div id="tabLocat" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-locat/>
    </div>
    <div id="tabRol" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-rol/>
    </div>
    <div id="tabTrans" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-trans/>
    </div>
    <div id="tabUser" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-user/>
    </div>
    <div id="tabAssessment" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-assess/>
    </div>
    <div id="tabProd" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-prod/>
    </div>
    <div id="tabPubl" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-publ/>
    </div>
    <div id="tabPurch" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-purch/>
    </div>
    <div id="tabRolUser" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-tab-rol-user/>
    </div>
    <div id="formCat" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-cat/>
    </div>
    <div id="formLocat" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-loc/>
    </div>
    <div id="formUser" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-user/>
    </div>
    <div id="formPubl" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-pub/>
    </div>
    <div id="formPurch" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-purch/>
    </div>
    <div id="formAssess" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-assess/>
    </div>
    <div id="formProd" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-prod/>
    </div>
    <div id="formRol" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-rol/>
    </div>
    <div id="formRolUser" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-rol-user/>
    </div>
    <div id="formTrans" role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <x-form-trans/>
    </div>

    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<script type="text/javascript">
  $("#tabCat").hide();
  $("#tabLocat").hide();
  $("#tabRol").hide();
  $("#tabRolUser").hide();
  $("#tabTrans").hide();
  $("#tabUser").hide();
  $("#tabAssessment").hide();
  $("#tabProd").hide();
  $("#tabPubl").hide();
  $("#tabPurch").hide();

  $("#formCat").hide();
  $("#formLocat").hide();
  $("#formRol").hide();
  $("#formRolUser").hide();
  $("#formTrans").hide();
  $("#formUser").hide();
  $("#formAssess").hide();
  $("#formProd").hide();
  $("#formPubl").hide();
  $("#formPurch").hide();

  function ShowHideTabCat(){
    let text = "";
    if($("#hideShowTabCat").text() === "Visualizar tabla"){
      $("#tabCat").show();
      text = "Ocultar tabla";
    }else{
      $("#tabCat").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabCat").html(text);
  };
  function ShowHideTabLocat(){
    let text = "";
    if($("#hideShowTabLocat").text() === "Visualizar tabla"){
      $("#tabLocat").show();
      text = "Ocultar tabla";
    }else{
      $("#tabLocat").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabLocat").html(text);
  };
  function ShowHideTabRol(){
    let text = "";
    if($("#hideShowTabRol").text() === "Visualizar tabla"){
      $("#tabRol").show();
      text = "Ocultar tabla";
    }else{
      $("#tabRol").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabRol").html(text);
  };
  function ShowHideTabRolUser(){
    let text = "";
    if($("#hideShowTabRolUser").text() === "Visualizar tabla"){
      $("#tabRolUser").show();
      text = "Ocultar tabla";
    }else{
      $("#tabRolUser").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabRolUser").html(text);
  };
  function ShowHideTabTrans(){
    let text = "";
    if($("#hideShowTabTrans").text() === "Visualizar tabla"){
      $("#tabTrans").show();
      text = "Ocultar tabla";
    }else{
      $("#tabTrans").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabTrans").html(text);
  };
  function ShowHideTabUser(){
    let text = "";
    if($("#hideShowTabUser").text() === "Visualizar tabla"){
      $("#tabUser").show();
      text = "Ocultar tabla";
    }else{
      $("#tabUser").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabUser").html(text);
  };
  function ShowHideTabVal(){
    let text = "";
    if($("#hideShowTabAssess").text() === "Visualizar tabla"){
      $("#tabAssessment").show();
      text = "Ocultar tabla";
    }else{
      $("#tabAssessment").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabAssess").html(text);
  };
  function ShowHideTabProd(){
    let text = "";
    if($("#hideShowTabProd").text() === "Visualizar tabla"){
      $("#tabProd").show();
      text = "Ocultar tabla";
    }else{
      $("#tabProd").hide();
      text = "Visualizar tabla";
    }
    
    $("#hideShowTabProd").html(text);
  };
  function ShowHideTabPub(){
    let text = "";
    if($("#hideShowTabPubl").text() === "Visualizar tabla"){
      $("#tabPubl").show();
      text = "Ocultar tabla";
    }else{
      $("#tabPubl").hide();
      text = "Visualizar tabla";
    }
    
    $("#hideShowTabPubl").html(text);
  };
  function ShowHideTabComp(){
    let text = "";
    if($("#hideShowTabPurch").text() === "Visualizar tabla"){
      $("#tabPurch").show();
      text = "Ocultar tabla";
    }else{
      $("#tabPurch").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabPurch").html(text);
  };

  function ShowHideTabRolUser(){
    let text = "";
    if($("#hideShowTabRolUser").text() === "Visualizar tabla"){
      $("#tabRolUser").show();
      text = "Ocultar tabla";
    }else{
      $("#tabRolUser").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowTabRolUser").html(text);
  };

  function ShowHideFormCat(){
    let text = "";
    if($("#hideShowFormCat").text() === "Editar tupla de datos"){
      $("#formCat").show();
      text = "Cerrar Edición";
    }else{
      $("#formCat").hide();
      text = "Editar tupla de datos";
    }
    
    $("#hideShowFormCat").html(text);
  };
  function ShowHideFormLocat(){
    let text = "";
    if($("#hideShowFormLocat").text() === "Editar tupla de datos"){
      $("#formLocat").show();
      text = "Cerrar Edición";
    }else{
      $("#formLocat").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormLocat").html(text);
  };
  function ShowHideFormUser(){
    let text = "";
    if($("#hideShowFormUser").text() === "Editar tupla de datos"){
      $("#formUser").show();
      text = "Cerrar Edición";
    }else{
      $("#formUser").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormUser").html(text);
  };
  function ShowHideFormPub(){
    let text = "";
    if($("#hideShowFormPubl").text() === "Editar tupla de datos"){
      $("#formPubl").show();
      text = "Cerrar Edición";
    }else{
      $("#formPubl").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormPubl").html(text);
  };
  function ShowHideFormComp(){
    let text = "";
    if($("#hideShowFormPurch").text() === "Editar tupla de datos"){
      $("#formPurch").show();
      text = "Cerrar Edición";
    }else{
      $("#formPurch").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormPurch").html(text);
  };
  function ShowHideFormProd(){
    let text = "";
    if($("#hideShowFormProd").text() === "Editar tupla de datos"){
      $("#formProd").show();
      text = "Cerrar Edición";
    }else{
      $("#formProd").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormProd").html(text);
  };
  function ShowHideFormVal(){
    let text = "";
    if($("#hideShowFormAssess").text() === "Editar tupla de datos"){
      $("#formAssess").show();
      text = "Cerrar Edición";
    }else{
      $("#formAssess").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormAssess").html(text);
  };
  function ShowHideFormRol(){
    let text = "";
    if($("#hideShowFormRol").text() === "Editar tupla de datos"){
      $("#formRol").show();
      text = "Cerrar Edición";
    }else{
      $("#formRol").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormRol").html(text);
  };
  function ShowHideFormRolUser(){
    let text = "";
    if($("#hideShowFormRolUser").text() === "Editar tupla de datos"){
      $("#formRolUser").show();
      text = "Cerrar Edición";
    }else{
      $("#formRolUser").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormRolUser").html(text);
  };
  function ShowHideFormTrans(){
    let text = "";
    if($("#hideShowFormTrans").text() === "Editar tupla de datos"){
      $("#formTrans").show();
      text = "Cerrar Edición";
    }else{
      $("#formTrans").hide();
      text = "Editar tupla de datos";
    }
    $("#hideShowFormTrans").html(text);
  };
  function ShowHideFormRolUser(){
    let text = "";
    if($("#hideShowFormRolUser").text() === "Visualizar tabla"){
      $("#formRolUser").show();
      text = "Ocultar tabla";
    }else{
      $("#formRolUser").hide();
      text = "Visualizar tabla";
    }
    $("#hideShowFormRolUser").html(text);
  }
;
</script>

