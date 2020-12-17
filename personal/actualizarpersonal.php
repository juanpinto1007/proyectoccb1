<?php 
if($_SERVER['REQUEST_METHOD']=='GET'){
    $persona= unserialize(base64_decode($_GET['objeto']));
    $prinom=$persona['prinom'];
    $segnom=$persona['segnom'];
    $priapellido=$persona['priapellido'];
    $segapellido=$persona['segapellido'];
    $identidad_id=$persona['identidad_id'];
    $cargo_id=$persona['nombre_cargo'];
    $newfecha=$persona['fecha_nacimiento'];
    $grado=$persona['grado'];
    $idciudad=$persona['nomciudad'];
    $barrio=$persona['barrio'];
    $direccion=$persona['direccion'];
    $email=$persona['email'];
    $telefono=$persona['telefono'];
    $fecha_nacimiento=date("Y/m/d", strtotime($newfecha));       

}

else if ($_SERVER['REQUEST_METHOD']=='POST'){  

    require_once '../../.././personal/modelo/personaldao.php';

   $dao=new PersonalDao();

    if(isset($_POST['boton'])){
        if($_POST['boton']=='Actualizar'){

            if(isset($_POST['primernombre']) & isset($_POST['segundonombre']) & isset($_POST['primerapellido']) & isset($_POST['segundoapellido']) & isset($_POST['identidad']) & isset($_POST['rol'])  & isset($_POST['fecha_nacimiento'])
               & isset($_POST['grado']) & isset($_POST['ciudad']) & isset($_POST['barrio']) & isset($_POST['direccion'])& isset($_POST['email'])& isset($_POST['tel'])){ 
                
                $prinom=htmlspecialchars($_POST['primernombre']);
                $segnom=htmlspecialchars($_POST['segundonombre']);
                $priapellido=htmlspecialchars($_POST['primerapellido']);
                $cargo_id=htmlspecialchars($_POST['rol']);
                $segapellido=htmlspecialchars($_POST['segundoapellido']);
                $identidad_id=htmlspecialchars($_POST['identidad']);
                $newfecha=htmlspecialchars($_POST['fecha_nacimiento']);
                $grado=htmlspecialchars($_POST['grado']);
                $idciudad=htmlspecialchars($_POST['ciudad']);
                $barrio=htmlspecialchars($_POST['barrio']);
                $direccion=htmlspecialchars($_POST['direccion']);
                $email=htmlspecialchars($_POST['email']);
                $telefono=htmlspecialchars($_POST['tel']);
                $fecha_nacimiento=date("Y/m/d", strtotime($newfecha));    
        
            if(empty($prinom) | empty($priapellido) | empty($segapellido) | empty($identidad_id) | empty($cargo_id)| empty($fecha_nacimiento)| empty($idciudad)| empty($barrio)
            | empty($direccion)| empty($email)| empty($telefono))
            {
                    $mensaje="Campo Vacio";
            }  
            else{
                $mensaje = $dao->actualizarpersona($identidad_id,$prinom,$segnom,$priapellido,$segapellido,$fecha_nacimiento,$grado,$cargo_id,$idciudad,$barrio,$direccion,$email,$telefono);
            }

        }
        
   
    } 
    else if ($_POST['boton']=='Limpiar') {
                    
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
}

}
    if($cargo_id=='Visitante'){
        require_once '../../.././personal/registrovisitante.php';

    }
    else{
        require_once '../../.././personal/vistaactualizar.php';
    }
 