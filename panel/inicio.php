<?php
require("register.php");

$nombreDefault = "";
$telefonoDefault = "";
$emailDefault = "";

if ($_POST){

  // Validar.
  $errores = validarRegistracion($_POST);
  //Si no hay errores:
  if(empty($errores)){
    //Registrar al usuario.->proxima clase
    //Reenviarlo a la pág. de éxito.
    header("Location:index.php");exit;
  }
  //Si sí hay errores.
    //Muestro los errores.
    foreach ($errores as $error) {
      echo $error;
    }

    if(isset($errores["nombre"]) == false){
  $nombreDefault = $_POST["nombre"];
  }

  if (isset($errores["email"]) == false) {
  $emailDefault = $_POST["email"];
}

}
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Cabañas Oficial</title>
  </head>
  <body>

  <!-- MENU -->

  <div class="container-fluid bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index0.php">Cabañas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">

                <li class="nav-item active">
                  <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Destacadas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">FAQ</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">Contacto</a>
                </li>


                <li>
                  <div class="dropdown">
                    <button class=  "btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                    <div class="text-center">
                    <img src="img/01.jpeg" class="rounded" alt="..." width="40" height="40">
                  </div>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="paginaDePerfil.php">Perfil</a>
                      <a class="dropdown-item" href="#">Ajustes</a>
                      <a class="dropdown-item" href="#">Mis Reservas</a>
                      <a class="dropdown-item" href="#">Mis Cabañas</a>
                      <a class="dropdown-item" href="index.php">Cerrar secion</a>
                    </div>
                  </div>
                </li>

              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <!-- PORTADA -->

  <div class="container-fluid bg-dark pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-white">Bienvenido a cabañas oficial</h1>
        </div>
      </div>
    </div>
  </div>

  <!-- DESTACADAS -->

  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <div class="row">

        <div class="col-md-4 text-center">
          <img src="img/01.jpeg" alt="" class="img-fluid">
          <h3>Cabaña 01</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsum impedit incidunt mollitia maiores voluptas, earum inventore eos, similique tempore.</p>
          <a href="Detalles.html" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Detalles</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/02.jpeg" alt="" class="img-fluid">
          <h3>Cabaña 02</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsum impedit incidunt mollitia maiores voluptas, earum inventore eos, similique tempore.</p>
          <a href="Detalles.html" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Detalles</a>
        </div>

        <div class="col-md-4 text-center">
          <img src="img/03.jpeg" alt="" class="img-fluid">
          <h3>Cabaña 03</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos ipsum impedit incidunt mollitia maiores voluptas, earum inventore eos, similique tempore.</p>
          <a href="Detalles.html" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Detalles</a>
        </div>

      </div>
    </div>
  </div>

  <!-- FAQ -->

  <div class="container-fluid pt-5 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2><strong>Preguntas Frecuentes</strong></h2>
        </div>
        <div class="col-md-12">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <strong class="text-success">¿Reciben tarjetas?</strong>
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <strong class="text-success">¿Aceptan mascotas?</strong>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <strong class="text-success">¿Puedo cancelar una semana antes?</strong>
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTACTO -->
  <div class="container-fluid pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form>
            <div class="form-group">
              <label for="">Nombre</label>
              <input type="text" name="nombre" class="form-control" placeholder="Ingresar nombre" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Colocar email" required>
            </div>
            <div class="form-group">
              <label for="">Consulta</label>
              <textarea class="form-control" name="consulta" id="" cols="30" rows="10" required>

              </textarea>
            </div>
            <button type="submit" class="btn btn-success boton-enviar">Enviar</button>
          </form>
        </div>
        <div class="col-md-6 text-center">
          <h3>Informacion de contacto</h3>
          <p><i class="fa fa-envelope" aria-hidden="true"></i> Email: info@dominio.com</p>
          <p><i class="fa fa-phone-square" aria-hidden="true"></i> Teléfono: 34534534</p>
          <p><i class="fa fa-map-marker" aria-hidden="true"></i> Dirección: av.siempre viva </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Ingresar-->
  <div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ingresar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar email" name="email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar contraseña" name="password" required>
            </div>
            <button onclick="paginaDePerfil.php" type="submit" class="btn btn-primary">Ingresar</button>
          </form>
          <br>
          <div class="row">
            <div class="col-md-12">
              <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#registrarme">Registrarme</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal registrarme-->
  <div class="modal fade" id="registrarme" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registrarme</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="index.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar nombre" name="nombre" required>
              <div class="">
                            <?php if($_POST && isset($errores["name"])){
                              echo '<h3 class="input--style-3">' . $errores["name"] . "</h3>";
                            }
                              ?>
            </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar email" name="email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar contraseña" name="password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirmar Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresar contraseña" name="confirmarPassword" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarme</button>
          </form>
        </div>
      </div>
    </div>
  </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
