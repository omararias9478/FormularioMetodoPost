<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>@import url('https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap');</style>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"crossorigin=anonymous></script>
    <title>Registro Usuarios</title>
</head>
<body class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Programación en PHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Omar Arias <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Docente: David Garzón</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Práctica Empresarial
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Fundación de Educación Superior Nueva América</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
        
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<section class="container-fluid pt-2 pb-5" >

<!--pt Padding Top 
    pb Padding Bottom-->
    <article class="row justify-content-center">
    <!--pt justify-content-center PARA ALINEAR EL TEXTO AL CENTRO-->
        <form action="home.php" method="post" class="p-4 bg-primary text-black">
        <!--p Padding en los cuatro lados-->
            <label for="user" class="column-for-label-sm">Ingrese su nombre</label>
            <!--column-for-label-sm SOLO EN PANTALLAS PEQUEÑAS SE VE UNA ETIQUETA POR COLUMNA-->
            <div class="form-group">
            <div class="form-row justify-content-around">
                <!--form-row A PARTIR DEL FORMULARIO CREAR UNA FILA-->
                <!--justify-content-around PARA CENTRAR EL ELEMENTO -->
                <div class ="col-sm-1">
                    <i class="fa fa-user-circle-o fa-2x"></i>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre">
                </div>
                </div>
                <div class="form-group">
                    <label for="user">Ingrese su telefono</label>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-phone fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="telefono" placeholder="Ingrese su telefono">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="user">Ingrese su localidad</label>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="localidad" placeholder="Ingrese su localidad">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="user">Ingrese su nacionalidad</label>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fa fa-globe-americas fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nacionalidad" placeholder="Ingrese su nacionalidad">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="user">Ingrese su genero</label>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fas fa-venus-mars fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="genero" placeholder="Ingrese su genero">
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="user">Ingrese su edad</label>
                    <div class="form-row justify-content-around">
                        <div class="col-sm-1">
                            <i class="fas fa-birthday-cake fa-2x"></i>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="edad" placeholder="Ingrese su edad">
                        </div>
                    </div>
                </div>
                <div class="p-4">
                <button type="submit" class="btn btn-block btn-success">
                    <i class="fa fa-sign-in">Registrarse</i>
                </button>
            </div>

            </div>

            
        </form>
        
    </article>
    
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>