<?php

    
if($_SERVER['REQUEST_METHOD']=='GET'){
    $usuario= unserialize(base64_decode($_GET['objeto']));
    $identidad_id=$usuario["identidad_id"];
    $contraseña=$usuario["pass"];

}

else if ($_SERVER['REQUEST_METHOD']=='POST'){

    
    require_once '../modelo/usuariodao.php';

   $dao=new UsuarioDao();

    if(isset($_POST['boton'])){
        if($_POST['boton']=='Actualizar'){

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

                    if($nivel=='1'||$nivel=='2'||$nivel=='6'||$nivel=='7'){
                        $mensaje = $dao->actualizarUsuario($identidad_id,$nivel,$pass);
                    }
                                      
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
}
    require_once 'vistaactualizar.php';
    
        
       
