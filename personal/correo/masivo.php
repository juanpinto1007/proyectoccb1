<?php
include '../modelo/usuariodao.php';
require("./restablecer/restablecer.php");

$correo=new Restablecer();
$dao=new UsuarioDao();

echo "<br>";

$usuarios=$dao->listausuarios();
$tam=sizeof($usuarios);
if($tam==0){
    echo "Sin Usuarios";
}
else{
echo "<br>";

foreach($usuarios as $usuario){

    echo "***************************************"."<br>".
        "Numid: ".$usuario["numid"]."<br>".   
         "Nombre: ".$usuario["nombre"]."<br>".
         "Apellido: ".$usuario["apellido"]."<br>".
         "email: ".$usuario["mail"]."<br>".
         "***************************************"."<br>";

    echo $correo->enviarRestablecerCorreo($usuario["mail"],"123487756",$usuario["nombre"]." ".$usuario["apellido"]);     
}

}


if (isset($_POST['boton'])) {
if($_POST['boton']=='notificaciones'){
    $fecha = date('Y-m-d');
    $consultar=$dao->personalNotificacion();
    $tam=sizeof($consultar);
    $noAsistieron=$dao->noAsistieron($fecha);
    $tam2=sizeof($noAsistieron);
    echo var_dump($noAsistieron);
    echo var_dump($consultar);
    $posicion=0;
     $count1=14;
for ($i=0; $i < $tam; $i++) { 
      $count=0;
        for($a=0; $a<$tam2; $a++){
          if($consultar[$i]['identidad_id']==$noAsistieron[$a]['identidad_id']){
              $count=1;
          }
        }
    if($count==0){
      echo $consultar[$i]['identidad_id'];
      echo '<br>';
       
    }
      
 }
     
}
}
