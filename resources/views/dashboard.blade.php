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
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
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
                <a id = "hideShowTabCat" class="nav-link active" onclick="ShowHideTabCat()">Visualizar tabla</a>
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
              </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-dark btn-block" data-toggle="collapse" href="#collapseExample8" role="button" aria-expanded="false" aria-controls="collapseExample8">
            Tabla Transacción
            </a>
            </p>
            <div class="collapse" id="collapseExample8">
              <div class="card card-body">
                <a id = "hideShowTabTans" class="nav-link active" onclick="ShowHideTabTrans()">Visualizar tabla</a>
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
                <a class="nav-link active" href="#">
                Editar tupla de datos
                </a>
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
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>
<script type="text/javascript">
  $("#tabCat").hide();
  $("#tabLocat").hide();
  $("#tabRol").hide();
  $("#tabTrans").hide();
  $("#tabUser").hide();
  $("#tabAssessment").hide();
  $("#tabProd").hide();
  $("#tabPubl").hide();
  $("#tabPurch").hide();
  function ShowHideTabCat(){
    let text = "";
    if($("#hideShowTabCat").text() === "Visualizar tabla"){
      $("#tabCat").show();
      text = "Ocultar tabla";
    }else{
      $("#tabCat").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabCat").html(text);
  }
  function ShowHideTabLocat(){
    let text = "";
    if($("#hideShowTabLocat").text() === "Visualizar tabla"){
      $("#tabLocat").show();
      text = "Ocultar tabla";
    }else{
      $("#tabLocat").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabLocat").html(text);
  }
  function ShowHideTabRol(){
    let text = "";
    if($("#hideShowTabRol").text() === "Visualizar tabla"){
      $("#tabRol").show();
      text = "Ocultar tabla";
    }else{
      $("#tabRol").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabRol").html(text);
  }
  function ShowHideTabTrans(){
    let text = "";
    if($("#hideShowTabTans").text() === "Visualizar tabla"){
      $("#tabTrans").show();
      text = "Ocultar tabla";
    }else{
      $("#tabTrans").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabTans").html(text);
  }
  function ShowHideTabUser(){
    let text = "";
    if($("#hideShowTabUser").text() === "Visualizar tabla"){
      $("#tabUser").show();
      text = "Ocultar tabla";
    }else{
      $("#tabUser").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabUser").html(text);
  }
  function ShowHideTabVal(){
    let text = "";
    if($("#hideShowTabAssess").text() === "Visualizar tabla"){
      $("#tabAssessment").show();
      text = "Ocultar tabla";
    }else{
      $("#tabAssessment").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabAssess").html(text);
  }
  function ShowHideTabProd(){
    let text = "";
    if($("#hideShowTabProd").text() === "Visualizar tabla"){
      $("#tabProd").show();
      text = "Ocultar tabla";
    }else{
      $("#tabProd").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabProd").html(text);
  }
  function ShowHideTabPub(){
    let text = "";
    if($("#hideShowTabPubl").text() === "Visualizar tabla"){
      $("#tabPubl").show();
      text = "Ocultar tabla";
    }else{
      $("#tabPubl").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabPubl").html(text);
  }
  function ShowHideTabComp(){
    let text = "";
    if($("#hideShowTabPurch").text() === "Visualizar tabla"){
      $("#tabPurch").show();
      text = "Ocultar tabla";
    }else{
      $("#tabPurch").hide();
      text = "Visualizar tabla"
    }
    
    $("#hideShowTabPurch").html(text);
  }
</script>
