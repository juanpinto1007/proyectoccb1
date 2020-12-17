<?php
require_once '../modelo/usuariodao.php';
$consulta=new UsuarioDao();

if(isset($_POST['boton'])){
   if($_POST['boton']=='Modificar'){

      if(isset($_POST['contraseña']) & isset($_POST['conficontra']) & isset($_POST['contrapass'])){

       

         $conficontra=htmlspecialchars($_POST['conficontra']);
         $contraseña=htmlspecialchars($_POST['contraseña']);
         $contrapass=htmlspecialchars($_POST['contrapass']);
         if(empty($conficontra) | empty($contraseña) | empty($contrapass))
         {
             $mensaje="Campo Vacio";
         }

          else if ($contrapass==$_SESSION['contraseña'] && $contraseña==$conficontra ){
           $mensaje = $consulta->modificarContraseña($_SESSION['usuario'],$contraseña);              
          }
          else if ($contraseña<>$conficontra || $contrapass<>$contraseña) {
                            
            $mensaje = "Contraseña incorrecta!!";
  
        } 
           

      }     
      
  }else if ($_POST['boton']=='Limpiar') {
    $contraseña="";
    $conficontra="";
    $mensaje="";
  }


  

 } 


require_once 'vistamodificar.php';
      