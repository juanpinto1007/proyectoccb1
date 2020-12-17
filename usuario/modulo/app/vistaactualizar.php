<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <title>Actualizar Usuario</title>
</head>
<body>

  <div class="container">
     
   

    <div class="jumbotron" id="actualizar">
            <h4 class="text-aling">Actualizar Usuario</h4><br>

               <?php
                   if(empty($mensaje)==false){
                        echo "<div class='alert alert-info'>
                        <strong>Mensaje! </strong>".$mensaje."</div>";
                    }
                ?>

            <form action="?accion=actualizar" method="post">
                <input type="text" placeholder="Numero De Usuario" class="form-control" name="identidad_id" readonly value="<?php if(isset($identidad_id)){echo $identidad_id;} ?>"><br>
                <input type="password" placeholder="Contraseña" class="form-control" name="pass"><br>
                <input type="password" placeholder="Confirmar Contraseña" class="form-control" name="passconfi"><br>

            <select class="form-control" name="rol">
                <option value="0">Seleccione el cargo</option> 
                <option value="1">Secretario(a)</option>
                <option value="2">Profesor(a)</option>
                <option value="6">Vigilante</option>
                <option value="7">Operario de Aseo</option>
                 
			      </select><br>
                <div class="text-center">
                  <input type="submit" name="boton" class="btn btn-primary" onclick="javascript:return asegurar();" class="boton" value="Actualizar">
                  <a href="?accion=mostrar" class="btn btn-primary">Usuarios</a>
                </div>

            </form>    
            
</div>


  </div>  

  <script>
  function asegurar ()
  {
      rc = confirm("¿Seguro que desea Actualizar?");
      return rc;
  }
  </script>
                    
</body>
</html>