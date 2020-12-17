<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/jquery.dataTables.min.css"> -->
   <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script> -->

<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<script type="text/javascript" charset="utf8" src="../assets/bootstrap/js/jquery.min.js"></script> 
<script type="text/javascript" src="../assets/bootstrap/js/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../assets/bootstrap/js/jquery.dataTables.min.js"></script> 
<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/jquery.dataTables.css">  
<link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">



    <title>Usuarios</title>

    <style>

#tabla{

  text-align:center;

}
/* #tabla > thead > tr > th:nth-child(5){
   width:20%;
   
} */
.dataTables_wrapper .dataTables_paginate .paginate_button {
background-color:#007bff;
color:white !important;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
background-color:#007bff !important;
color:white !important;

} 

.dataTables_wrapper .dataTables_paginate .paginate_button:active {
  background-color:#007bff !important;
color:white !important;

}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    color: white !important;
    border: 1px solid #00d2ff;
    background-color: #585858;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%, #00d2ff));
    background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
    background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
    
}

.dataTables_wrapper .dataTables_paginate .paginate_button.disabled, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:hover, .dataTables_wrapper .dataTables_paginate .paginate_button.disabled:active {
  color: white !important;
    border: 1px solid #00d2ff;
    background-color: #585858;
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #007bff), color-stop(100%,#00d2ff));
    background: -webkit-linear-gradient(top, #007bff 0%, #007bff 0%);
    background: -moz-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -ms-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: -o-linear-gradient(top, #007bff 0%, #007bff 100%);
    background: linear-gradient(to bottom, #007bff 0%, #007bff 100%);
}




    </style>
</head>
<body>

 <!--  <div class="container"> -->

            <br><br><center><h2 class="text-aling">Usuarios del Sistema</h2></center><br><br>
           <!--  <a href="vistaguardar.php" class="btn btn-primary">Nuevo Usuario</a><br><br> -->

      <?php

        if($tam==0){
          echo "<br><br><p><strong>No Se Encontró Registro De Usuario!!!</strong></p>";
        }
        else{
      ?>

    <table id="tabla">
    <thead>
            <th>Numero</th>
            <th>Nivel</th>
            <th>Identificacion</th>
            <!-- <th>Contraseña</th> -->
            <th>Acción</th>          
    </thead>
    <tbody>
  <?php
      $cont=1;

      foreach($usuarios as $usuario){
          echo "<tr>" .
          "<td>" . $cont . "</td>" .
          "<td>" . $usuario["nivel"] . "</td>" .
          "<td>" . $usuario["identidad_id"] . "</td>" .
          /* "<td>" . $usuario["pass"] . "</td>" . */
          "<td><a href='?accion=actualizar&objeto=".base64_encode(serialize($usuario))."' class='btn btn-warning'>Actualizar</a>&nbsp;&nbsp" .
          "<a href='eliminar.php?identidad_id=".base64_encode($usuario['identidad_id'])."' class='btn btn-danger' onclick='javascript:return asegurar();'>Eliminar</a></td>" .
          "</tr>"; //serialize es para enviar un objeto por parametro url 
      $cont++;
      }     

  ?>                

    </tbody>        

 </table> 

    <?php
       }
    ?>
 
    </div>
    <script>
        function asegurar ()
        {
            rc = confirm("¿Seguro que desea Eliminar?");
            return rc;
        }

         $(document).ready(function () {
            $('#tabla').dataTable({
                "language": {
                    "url": "../assets/bootstrap/js/Spanish.json"
                },
                dom: 'Bfrtip',
                "pageLength": 5
            });
        }); 



      </script>
    </div>
 <!--  </div>   -->

        
    <!-- <script src="../bootstrap/js/bootstrap.min.js"></script>
 
    <script type="text/javascript" charset="utf8" src="../bootstrap/js/popper.min.js"></script>


   <script type="text/javascript" charset="utf8" src="../bootstrap/js/jquery.dataTables.min.js"></script> 
    <script src="../js/script.js"></script>   -->
</body>
</html>