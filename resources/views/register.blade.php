<!doctype html>
<html lang="es">
<link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Registro</title>
  </head>
  <body>

    <h1>
        Registrar una cuenta
    </h1>
    

    <form>
        <div class="form-group mx-auto w-25">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group mx-auto w-25">
            <label for="lastname">Apellido</label>
            <input type="text" class="form-control" id="lastname" placeholder="Ingrese su apellido">
        </div>
        <div class="form-group mx-auto w-25">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ingrese su email">
        </div>
        <div class="form-group mx-auto w-25">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
        </div>
        <div class="form-group mx-auto w-25">
            <label for="exampleFormControlTextarea1">Descripción</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripción del usuario"></textarea>
          </div>
        <div class="col text-center">
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>