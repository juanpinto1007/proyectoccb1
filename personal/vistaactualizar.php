<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gestión Personal</title>
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
        <form action="?accion=actualizarpersonal" method="post" id="formulario">
       <h3 id="tituloperso">ACTUALIZAR</h3>

       <?php
                   if(empty($mensaje)==false){
                        echo "<div class='alert alert-info'>
                        <strong>Mensaje! </strong>".$mensaje."</div>";
                    }
                ?>

            <div class="row">
                <div class="col-md-6">
                    <input type="text"class="form-control" placeholder="Primer Nombre" name="primernombre" value="<?php if(isset($prinom)){echo $prinom;} ?>">
                    <input type="text"class="form-control" placeholder="Segundo Nombre" name="segundonombre" value="<?php if(isset($segnom)){echo $segnom;} ?>">
                    <input type="text"class="form-control" placeholder="Primer Apellido" name="primerapellido" value="<?php if(isset($priapellido)){echo $priapellido;} ?>">
                    <input type="text"class="form-control" placeholder="Segundo Apellido" name="segundoapellido" value="<?php if(isset($segapellido)){echo $segapellido;} ?>">
                    <input type="text"class="form-control" placeholder="Número I.D" name="identidad" readonly value="<?php if(isset($identidad_id)){echo $identidad_id;} ?>">
                    <input type="date" class="form-control" placeholder="Fecha De Nacimiento" name="fecha_nacimiento" value="<?php if(isset($newfecha)){echo $newfecha;} ?>">
                    <input type="text"class="form-control" placeholder="Telefono" name="tel" value="<?php if(isset($telefono)){echo $telefono;} ?>">
                </div>
                    <div class="col-md-6">
                        <select  id="" class="form-control" name="ciudad">
                            <option value="0">Seleccione La Ciudad</option>
                            <option value="1">Cartagena</option>
                            <option value="2">Turbaco</option>
                            <option value="3">Arjona</option>
                        </select>
                        <input type="text"class="form-control" placeholder="Barrio" name="barrio" value="<?php if(isset($barrio)){echo $barrio;} ?>">
                        <input type="text"class="form-control" placeholder="Dirección" name="direccion" value="<?php if(isset($direccion)){echo $direccion;} ?>">
                        <input type="email"class="form-control" placeholder="E-Mail" name="email" value="<?php if(isset($email)){echo $email;} ?>">
                        <select  id="" class="form-control" name="rol">
                            <option value="0">Seleccione El Cargo</option>
                            <option value="1">Secretario(a)</option>
                            <option value="2">Profesor(a)</option>
                            <option value="3">Estudiante</option>
                        </select>
         
                        <input type="text"class="form-control" placeholder="Grado" name="grado" value="<?php if(isset($grado)){echo $grado;} ?>">
                    </div>
            </div>
            <br>
                        <div class="row">
                            <div class="col-md-12 guardar">
                            <input type="submit" name="boton" class="btn btn-primary" value="Actualizar">
                                <a class="btn btn-primary" href="?accion=mostrarpersonal">Consultar</a>
                           <!--  <input type="submit" name="boton" class="btn btn-primary" value="Limpiar"> -->
                            </div>
                        </div>
            
            
           
           
        </form>       
        </div>  
        </div> 
</body>
</html>
