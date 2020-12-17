
<?php 
/*    require_once 'menuu.php';
 */   require_once '../modelo/usuariodao.php';

   $dao=new UsuarioDao();

if(isset($_POST['boton'])){
    if($_POST['boton']=='Guardar'){

        if(isset($_POST['identidad_id']) & isset($_POST['pass']) & isset($_POST['passconfi']) & isset($_POST['rol'])){
            
                $identidad_id=htmlspecialchars($_POST['identidad_id']);
                $pass=htmlspecialchars($_POST['pass']);
                $conficontra=htmlspecialchars($_POST['passconfi']);
                $nivel=htmlspecialchars($_POST['rol']);

                if(empty($identidad_id) | empty($pass) | empty($conficontra) | empty($nivel))
                {
                    $mensaje="Campo Vacio";
                }
                    
               else if($pass==$conficontra){
                
                    $mensaje = $dao->insertarUsuario($nivel,$identidad_id,$pass);
                }

                else if ($pass<>$conficontra) {
                        
                    $mensaje = "Contraseña incorrecta!!";

                }
                
        } 

        


    }
    
     else if ($_POST['boton']=='Limpiar') {
                
            $identidad_id="";
            $pass="";
            $conficontra="";
            $nivel="";
            $mensaje="";

    }



} 

    require_once 'vistaguardar.php';
        
       