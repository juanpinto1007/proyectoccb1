
<?php 
 
   require_once '../../.././personal/modelo/personaldao.php';

   $dao=new PersonalDao();

    if(isset($_POST['boton'])){
    if($_POST['boton']=='Guardar'){  

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
        

                if(empty($prinom) | empty($priapellido) | empty($segapellido) | empty($identidad_id) | empty($cargo_id)| empty($fecha_nacimiento) | empty($idciudad)| empty($barrio)
                | empty($direccion)| empty($email)| empty($telefono))
                {
                    $mensaje="Campo Vacio";
                }
                    
                
                 else { 
                     $mensaje = $dao->insertarpersonal($identidad_id,$prinom,$segnom,$priapellido,$segapellido,$fecha_nacimiento,$grado,$cargo_id,$idciudad,$barrio,$direccion,$email,$telefono);
                }
              

            }  
                 
         

        


    } 
    
      else if ($_POST['boton']=='Limpiar') {
                
            $prinom="";
            $segnom="";
            $priapellido="";
            $segapellido="";
            $identidad_id="";
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
    require_once '../../.././personal/gestipersona.php';
            