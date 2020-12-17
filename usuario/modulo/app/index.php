<!DOCTYPE html>
<html lang="es">
<head>
<title>Menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/menuu.css">
   <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css"> 
   <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../assets/bootstrap/js/jquery.dataTables.min.js"></script> 
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/jquery.dataTables.css">  
   <link rel="stylesheet" href="../assets/css/userconfi.css">
   <script src="../assets/js/script.js"></script>
<style>


</style>

</head>
<body>

 

  

    <?php
    if(isset($_GET['accion'])){
        
       if($_GET['accion']=="actualizar"){
           $accion="mostrar";
       } 
       else{     
        $accion=$_GET['accion'];
       } 
       
    }
    
    else{
        $accion="inicio";
    }

        require_once 'header.php';

    ?>


 

<div id="content"> 

        
    <?php

        require_once '../ruta/routing.php';

?>


</div>
    
</body>
</html>