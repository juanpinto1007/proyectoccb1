<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../usuario/modulo/assets/css/menuu.css">
    <link rel="stylesheet" href="../usuario/modulo/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../usuario/modulo/assets/fontawesome/css/all.min.css"> 
    <script src="../usuario/modulo/assets/bootstrap/js/jquery.min.js"></script>
    <script src="../usuario/modulo/assets/bootstrap/js/bootstrap.min.js"></script>  
    <title>Datos De La Empresa</title>
    <style>

.abs-center{
    display: flex;
    justify-content: center;
}

 #formulario{
    width: 60vw;
    background:#3498DB; 
    padding: 5%;
    height: auto;
}   
 #formulario input,select{
    margin-bottom: 10px;
}

#formulario .guardar {
    display: flex;
    justify-content: center;
}
#formulario .btn-primary {
    margin:1%;
}

#tituloperso{

  text-align: center;
  color: #fff;
  position:relative;
  bottom: 20px;
}
 
    </style>
</head>
<body>

    <div class="container">
       <div class="abs-center" id="centrar">
        <form action="?accion=empresa" method="post" enctype="multipart/form-data" id="formulario">
       <h3 id="tituloperso">CONFIGURACION DE LA INSTITUCION</h3>

       <?php
                   if(empty($mensaje)==false){
                        echo "<div class='alert alert-info'>
                        <strong>Mensaje! </strong>".$mensaje."</div>";
                    }
 

                ?>

            <div class="row">
                <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Nombre" name="nombre">
                    <input type="varchar"class="form-control" placeholder="Nit" name="nit">
                    <input type="text"class="form-control" placeholder="Ciudad" name="ciudad">
                    <input type="number" class="form-control" placeholder="Código Postal" name="codigo">
                </div>
                    <div class="col-lg-6">
                    <input type="text"class="form-control" placeholder="Dirección" name="direccion">
                    <input type="email"class="form-control" placeholder="E-Mail" name="email">
                    <input type="text"class="form-control" placeholder="Telefono" name="tel">
                    </div>
            </div>
            <br>
                        <div class="row">
                            <div class="col-lg-12 guardar">
                            <input type="submit" name="boton" class="btn btn-primary" value="Guardar">
                            <a href='?accion=editar' class="btn btn-primary">Editar</a>
                            <input type="submit" name="boton" class="btn btn-primary" value="Limpiar">
                            </div>
                        </div>
        </form>       
        </div>  
        </div> 

<script>
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
</script>

</body>
</html>
