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
        <form action="?accion=guardarpersonal" method="post" id="formulario">
       <h3 id="tituloperso">GESTION DEL PERSONAL</h3>

       <?php
                   if(empty($mensaje)==false){
                        echo "<div class='alert alert-info'>
                        <strong>Mensaje! </strong>".$mensaje."</div>";
                    }
                ?>

            <div class="row">
                <div class="col-md-6">
                    <input type="text"class="form-control" placeholder="Primer Nombre" name="primernombre">
                    <input type="text"class="form-control" placeholder="Segundo Nombre" name="segundonombre">
                    <input type="text"class="form-control" placeholder="Primer Apellido" name="primerapellido">
                    <input type="text"class="form-control" placeholder="Segundo Apellido" name="segundoapellido">
                    <input type="number"class="form-control" placeholder="Número I.D" name="identidad">
                    <input type="date" class="form-control" placeholder="Fecha De Nacimiento" name="fecha_nacimiento">
                    <input type="text"class="form-control" placeholder="Telefono" name="tel">
                </div>
                    <div class="col-md-6">
                        <select  id="" class="form-control" name="ciudad">
                            <option value="0">Seleccione La Ciudad</option>
                            <option value="1">Cartagena</option>
                            <option value="2">Turbaco</option>
                            <option value="3">Arjona</option>
                        </select>
                        <input type="text"class="form-control" placeholder="Barrio" name="barrio">
                        <input type="text"class="form-control" placeholder="Dirección" name="direccion">
                        <input type="email"class="form-control" placeholder="E-Mail" name="email">
                        <select  id="" class="form-control" name="rol">
                            <option value="0">Seleccione El Cargo</option>
                            <option value="1">Estudiante</option>
                            <option value="2">Profesor(a)</option>
                            <option value="3">Secretario(a)</option>
                            <option value="6">Vigilante</option>
                            <option value="7">Operario de Aseo</option>

                        </select>
         
                        <input type="text"class="form-control" placeholder="Grado" name="grado">
                    </div>
            </div>
            <br>
                        <div class="row">
                            <div class="col-md-12 guardar">
                            <input type="submit" name="boton" class="btn btn-primary" value="Guardar">
                                <a class="btn btn-primary" href="?accion=mostrarpersonal">Consultar</a>
                            <input type="submit" name="boton" class="btn btn-primary" value="Limpiar">
                            </div>
                        </div>
            
            
           
           
        </form>       
        </div>  
        </div> 
</body>
</html>
