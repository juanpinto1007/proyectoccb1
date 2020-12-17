
<!doctype html>
<html lang="es">
  <head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
</head>
<body>
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex">
        </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Inicio de Sesión
          </h4>
          <form class="form-box px-3" action="iniciosesion.php" method="post">
            <div class="form-input">
              <span><i class="fa fa-user"></i></span>
              <input type="text" name="user" placeholder="Usuario" tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="pass" placeholder="Contraseña" required>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Entrar
              </button>
            </div>           
            <div class="alert alert-info" id="mensaje">
                <strong>Ups!</strong> Usuario o contraseña incorrecta!!!
           </div>
              <div class="img-right d-none d-md-flex">
              </div>
            </div> 
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="../assets/lib/jquery.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>