<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Personal</title>
    <style>

        #tabla{
  
            text-align:center;
        }
  
        #tabla > thead > tr > th:nth-child(12){
         width: 40% !important; 
        } 
          
        #tabla > tbody > tr > td:nth-child(10){
         width: 70% !important;        
        } 

         .btn-warning{
            margin:0;
            width: 80% !important;  
          
                   
        }

        .btn-danger{
            margin:0;
            width: 80% !important;
            margin-right:6%;
        }

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

        #centerboton{
            display: flex;
            justify-content: center;
        }
     
    </style>
</head>
<body>
 
            <center><h2 class="text-aling">Personal del Sistema</h2></center>


            
                <?php

                    if($tam==0){
                    echo "<br><br><p><strong>No Se Encontró Registro De Usuario!!!</strong></p>";
                    }
                    else{
                ?>    

<table id="tabla">
    <thead>
            <th>Numero</th>
            <th>Nombre</th>
            <th>Identificación</th>
            <th>Fecha Nacimiento</th>
            <th>Cargo</th>
            <th>Grado</th>      
            <th>Ciudad</th>
            <th>Barrio</th>        
            <th>Dirección</th>
            <th>Email</th>    
            <th>Telefono</th>  
            <th>Acción</th>    
              

    </thead>
    <tbody>
  <?php
      $cont=1;

      foreach($personal as $persona){
          echo "<tr>" .
          "<td>" . $cont . "</td>" .
          "<td>" . $persona["prinom"]." ".$persona["segnom"]." ".$persona["priapellido"]." ".$persona["segapellido"] . "</td>" .
          "<td>" . $persona["identidad_id"] . "</td>" .
          "<td>" . $persona["fecha_nacimiento"] . "</td>" .
          "<td>" . $persona["nombre_cargo"] . "</td>" .
          "<td>" . $persona["grado"] . "</td>" .
          "<td>" . $persona["nomciudad"] . "</td>" .
          "<td>" . $persona["barrio"] . "</td>" .
          "<td>" . $persona["direccion"] . "</td>" .
          "<td>" . $persona["email"] . "</td>" .
          "<td>" . $persona["telefono"] . "</td>" .
          "<td><a href='?accion=actualizarpersonal&objeto=".base64_encode(serialize($persona))."' class='btn btn-warning'>Actualizar</a>&nbsp;&nbsp" .
          "<a href='../../.././personal/eliminarpersonal.php?identidad_id=".base64_encode($persona['identidad_id'])."' class='btn btn-danger' onclick='javascript:return asegurar();'>Eliminar</a></td>" .
          "</tr>"; //serialize es para enviar un objeto por parametro url 
      $cont++;
      }     

  ?>                

    </tbody>        

 </table> 
        <?php
            }
        ?>
 



          <div id="centerboton"><a href="?accion=guardarpersonal" class="btn btn-primary" style="width:8%;">Atras</a></div> 
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


</body>
</html>