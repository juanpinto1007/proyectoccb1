<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Registro Visitante</title>
    <style>

.abs-center{
    display: flex;
    justify-content: center;
}
  
form{
    width: 60vw;
    background:#3498DB; 
    
}   


.btn-primary{
    margin: 2px;
}

input{
    margin-bottom: 5px;
}

h3{
  text-align: center;
  color: #fff;
}
 
#formulario input,select{
    margin: 5px 0;
}

#botones{
    display: flex;
    justify-content: center;
}

    </style>
</head>
<body>

    <div class="container">
       <div class="abs-center">
        <form action="?accion=guardarvisitante" method="post" class="border p-3 form" id="formulario" >
        <h3>REGISTRO DE VISITANTES</h3><br>

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
                </div>
            </div>
            <br>
         <div class="row">
             <div class="col-md-12" id="botones">
               <button type="submit" class="btn btn-primary" name="boton" value="Guardar">Guardar</button> 
               <button type="submit" class="btn btn-primary" name="boton" value="Limpiar">Limpiar</button> 
               <a href="?accion=monitoreo" class="btn btn-primary">Monitoreo</a> 
             </div>
         </div>    
           
         </form>  
        </div> 
         
        </div> 

        
</body>
</html>