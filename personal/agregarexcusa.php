<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Excusa</title>
    <style>

 
.abs-center{
    display: flex;
    justify-content: center;
}
  
form{
    width: 60vw;
    background:#3498DB; 
    min-height: 80vh;    
}   


.btn-primary{
    position:relative;
    left:80%;

}

input{
    margin-bottom: 5px;
}

h3{
  text-align: center;
  color: #000000;
}

 table{
   text-align: center;

 }
 .row button{
    padding: 1%;
    width: 20%;
    display: absolute;
    top: 300px;
 }
 table th{
     color:#000000;
 }

 #tabla{

text-align:center;

}
#tabla > thead > tr > th:nth-child(5){
 width:20%;
 
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

 .btn-warning{
    width: 70%;
}

.btn-success{
    width:70%;
}

    </style>
</head>
<body>

    <div class="container">
        <h3>ASISTENCIA</h3><br>
                      <table id="tabla">
                            <thead>
                                <th>Numero</th>
                                <th>Identificación</th>
                                <th>Fecha</th>
                                <th>Excusa</th>
                                <th>Accion</th>
                            </thead>

                            <tbody>
                            <?php
                                $cont=1;
                                require_once '../../.././personal/modelo/gestiondao.php';
                                $dao=new GestionDao();
                                $asistencias=$dao->listaasistente();
                                $tam=sizeof($asistencias);

                            foreach($asistencias as $asistencia){
                                if ($asistencia["excusa"]=='X') {
                                    
                                        echo "<tr>" .
                                        "<td>" . $cont . "</td>" .
                                        "<td>" . $asistencia["identidad_id"] . "</td>" .
                                        "<td>" . $asistencia["fecha"] . "</td>" .
                                        "<td>" . $asistencia["excusa"] . "</td>" .
                                        "<td><a href='?accion=controladorexcusa&objeto=".base64_encode(serialize($asistencia))."' class='btn btn-warning'  onclick='javascript:return asegurar();'>Agregar Excusa</a>&nbsp;&nbsp" /* .
                                        "<a href='eliminar.php?identidad_id=".base64_encode($asistencia['identidad_id'])."' class='btn btn-danger' onclick='javascript:return asegurar();'>Eliminar</a></td>" */ .
                                        "</tr>"; //serialize es para enviar un objeto por parametro url 
                                    $cont++;
                                }

                                else{
                                    echo "<tr>" .
                                    "<td>" . $cont . "</td>" .
                                    "<td>" . $asistencia["identidad_id"] . "</td>" .
                                    "<td>" . $asistencia["fecha"] . "</td>" .
                                    "<td>" . $asistencia["excusa"] . "</td>" .
                                    "<td><a href='#' class='btn btn-success'>Verificado</a>&nbsp;&nbsp" /* .
                                    "<a href='eliminar.php?identidad_id=".base64_encode($asistencia['identidad_id'])."' class='btn btn-danger' onclick='javascript:return asegurar();'>Eliminar</a></td>" */ .
                                    "</tr>"; //serialize es para enviar un objeto por parametro url 
                                $cont++;
                                }

                            }     

                        ?>                

    </tbody>        

                      </table> 
        </div> 

        <script>
        function asegurar ()
        {
            rc = confirm("¿Seguro que desea agregar la excusa?");
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