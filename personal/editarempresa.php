<?php 

  require_once '../../.././personal/modelo/personaldao.php';
  $dao=new PersonalDao();
  $editarempresa=$dao->listaeditar();
  $tam=sizeof($editarempresa);

 
    foreach ($editarempresa as $editar) {  

        $nombre=$editar['nombre'];;
        $nit=$editar['nit'];
        $ciudad=$editar['ciudad'];
        $codigo=$editar['codigo_postal'];
        $direccion=$editar['direccion'];
        $telefono=$editar['tel'];
        $email=$editar['email']; 

    }    

 
            if(isset($_POST['nombre']) & isset($_POST['nit']) & isset($_POST['ciudad']) & isset($_POST['codigo']) & isset($_POST['direccion'])
            & isset($_POST['email']) & isset($_POST['tel'])){ 
                
                    $nombre=htmlspecialchars($_POST['nombre']);
                    $nit=htmlspecialchars($_POST['nit']);
                    $ciudad=htmlspecialchars($_POST['ciudad']);
                    $codigo=htmlspecialchars($_POST['codigo']);
                    $direccion=htmlspecialchars($_POST['direccion']);
                    $telefono=htmlspecialchars($_POST['tel']);
                    $email=htmlspecialchars($_POST['email']);
 
    
    
                    if(empty($nombre) | empty($nit) | empty($ciudad) | empty($codigo) | empty($direccion)
                        | empty($email) | empty($telefono))
                    {
                        $mensaje="Campo Vacio";
                    }
                        
                    
                     else {          
                        $mensaje = $dao->editarempresa($nombre,$nit,$ciudad,$codigo,$direccion,$telefono,$email);
                    }
                  
    
                 
                     
            } 
    
            
    
     
   
    
   /*  else if ($_POST['boton']=='Limpiar') {
                    
        $prinom="";
        $segnom="";
        $priapellido="";
        $segapellido="";
        $cargo_id="";
        $fecha_nacimiento="";
        $grado="";
        $idciudad="";
        $barrio="";
        $email="";
        $direccion="";
        $telefono="";
        $mensaje="";

    }
  */
 
    require_once '../../.././personal/vistaeditar.php';
    
 