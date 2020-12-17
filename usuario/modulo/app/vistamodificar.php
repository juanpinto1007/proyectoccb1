
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <title>Modificar Usuario</title>
</head>
<body>

<div class="jumbotron" id="modificar">
            <h4 class="text-aling">Modificar Contraseña</h4><br>

            <?php
                    if(empty($mensaje)==false){ 
                        echo "<div class='alert alert-info'>
                        <strong>Mensaje! </strong>".$mensaje."</div>";
                    }
                ?>

            <form action="?accion=modificar" method="post">
                <input type="password" placeholder="Contraseña Actual" class="form-control" name="contrapass"><br>
                <input type="password" placeholder="Contraseña" class="form-control" name="contraseña"><br>
                <input type="password" placeholder="Confirmar Contraseña" class="form-control" name="conficontra"><br>
                <div class="text-center">
                  <input type="submit" name="boton" class="btn btn-primary" class="boton" onclick="javascript:return asegurar();" value="Modificar">
                  <input type="submit" name="boton" class="btn btn-primary" class="boton" value="Limpiar">

                </div>
            </form>
          </div> 

  <script>
  function asegurar ()
  {
      rc = confirm("¿Seguro que desea Modificar La Contraseña?");
      return rc;
  }
  </script>

</body>
</html>