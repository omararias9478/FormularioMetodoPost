<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"crossorigin=anonymous></script>
    
    <title>Home</title>
</head>
<body class="bg-dark">
    <div class="alert alert-success alert-dissmissible fade show" role="alert">
        <strong>Bienvenido <?php echo htmlspecialchars($_POST['nombre']); ?> !.</strong> Usuario registrado correctamente
        <!--echo ES PARA MOSTRAR POR PANTALLA-->
        <!--htmlspecialchars -->
        <!--data dissmiss="alert" SIRVE PARA DESAPARECER LA ALERTA -->
        <button type="button" class="close" data dissmiss="alert">
        <span aria-hidden="true">&times;</span>
        </button>
        <!--&times; PARA AGREGAR UNA X  -->
    </div>
    <div class="alert alert-primary alert-dissmissable fade show" role="alert">
        <h1>Datos de Usuario</h1>
        <h2><b> Nombre de Usuario: </b></h2>
        <h3><?php echo htmlspecialchars($_POST['nombre']); ?></h3>

    </div>
    <div class="card bg-primary text-center " >
        <div class="card-body ">
            <h5 class="card-title text-white">Nombre de Usuario</h5>
            <h6 class="card-subtitle mb-2 text-black"><?php echo htmlspecialchars($_POST['nombre']); ?></h6>
            
        </div>
        <div class="card-body">
            <h5 class="card-title text-white">Teléfono</h5>
            <h6 class="card-subtitle mb-2 text-black"><?php echo htmlspecialchars($_POST['telefono']); ?></h6>
            
        </div>
        <div class="card-body">
            <h5 class="card-title text-white">Localidad</h5>
            <h6 class="card-subtitle mb-2 text-black"><?php echo htmlspecialchars($_POST['localidad']); ?></h6>
            
        </div>
        <div class="card-body">
            <h5 class="card-title text-white">Nacionalidad</h5>
            <h6 class="card-subtitle mb-2 text-black"><?php echo htmlspecialchars($_POST['nacionalidad']); ?></h6>
            
        </div>
        <div class="card-body">
            <h5 class="card-title text-white">Edad</h5>
            <h6 class="card-subtitle mb-2 text-black"><?php echo htmlspecialchars($_POST['edad']); ?></h6>
            
        </div>
    </div>

    
    <div class="p-4">
        <a href="index.php">
            <button type="button" class="btn btn-block btn-success p-4">
                Volver al Home<i class="fas fa-home fa-2x"></i>
            </button>
        </a>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    
</body>
</html>