<?php

  require_once '../../.././personal/modelo/gestiondao.php'; 
  require("../../.././personal/correo/restablecer/restablecer.php");
  $correo=new Restablecer();
  $dao=new GestionDao();
  if(isset($_POST['boton'])){
    if ($_POST['boton']=='confirmar') {       
          //buscar
            $fecha = date('Y-m-d');
            $hora =  date("g:i:s");   
            $identidad_id = htmlspecialchars($_POST['identidad']);   
            $descripcion = htmlspecialchars($_POST['text']); 
            $entrada = 'in';
            $salida = 'on';
            $listaid=$dao->listaIdentidad($identidad_id);
            $tam=sizeof($listaid);
            $busqueda = $dao->fechaAsistencia($fecha,$identidad_id); 
            $tam2=sizeof($busqueda);
    
            if($tam>0){

              if ($tam2%2==0 || $tam2==0){
                $insertar=$dao->insertarmonitoreo($identidad_id,$fecha,$hora,$entrada,$descripcion);
              }
             else if($tam2%2<>0){
              $insertar=$dao->insertarmonitoreo($identidad_id,$fecha,$hora,$salida,$descripcion);
             }

            }

            //insertar 
            $busqueda = $dao->fechaAsistencia($fecha,$identidad_id); 
            $tam2=sizeof($busqueda);
            
            if($tam2>0){
              $listado = $dao->listaAsistencia($fecha);
              foreach($listado as $consul){    
                echo "<tr>" .
                "<td>" . $consul['identidad_id'] . "</td>" .
                "<td>" . $consul['fecha']. "</td>" .
                "<td>" . $consul['hora']."</td>" .
                "<td>".$consul['descripcion_ac']."</td>" .
                "<td>".$consul['accion']."</td>" .
                "</tr>"; 
              }
            }
            else{ 
              $identidad="";
              $fecha="";
              $hora="";
              $descripcion="";
              $entrada="";
              $salida="";
              $busqueda="";
              echo "<br>"."<th colspan='8' style='background:#d9534f;'>"
                ."Ups Identificación incorrecta".
                "</th>";
            }  
        
    }
    
    else if($_POST['boton']=='notificaciones'){
      $fecha = date('Y-m-d');
      $consultar=$dao->personalNotificacion();
      $tam=sizeof($consultar);
      $noAsistieron=$dao->noAsistieron($fecha);
      $tam2=sizeof($noAsistieron);
      for ($i=0; $i < $tam; $i++) { 
        $count=0;
          for($a=0; $a<$tam2; $a++){
            if($consultar[$i]['identidad_id']==$noAsistieron[$a]['identidad_id']){
                $count=1;
                $excusa='✓';
                $excusa=$dao->insertarasistencia($consultar[$i]["identidad_id"],$fecha,$excusa);
            }
          }
      if($count==0){
        if($consultar[$i]['nombre_cargo']<>'Visitante'){
        $excusa='X';
        $excusa=$dao->insertarasistencia($consultar[$i]["identidad_id"],$fecha,$excusa);
        if($consultar[$i]["nombre_cargo"]=='Estudiante'){
           $correo->enviarRestablecerCorreo($consultar[$i]["email"],$consultar[$i]["identidad_id"],$consultar[$i]["prinom"], $fecha);       
        } 
      }
    }
        
   }
      $mensaje="El mensaje ha sido enviado al Correo Electronico";
      echo "<div class='alert alert-info'>
      <strong>Mensaje! </strong>".$mensaje."</div>";

       
  }

    else if($_POST['boton']=='limpiar'){     
      $identidad="";
      $fecha="";
      $hora="";
      $descripcion="";
      $entrada="";
      $salida="";
    }

}  
 
 
 
