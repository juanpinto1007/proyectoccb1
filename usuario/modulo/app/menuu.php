    <?php
        session_start();
        if(isset($_SESSION["usuario"])){
    ?>

<!doctype html>
<html lang="es">
  <head>
    
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" type="text/css" href="../assets/css/menuu.css">
   <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css"> 
   <script src="../assets/bootstrap/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf8" src="../assets/bootstrap/js/jquery.dataTables.min.js"></script> 
   <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/jquery.dataTables.css">  
   <link rel="stylesheet" href="../assets/css/userconfi.css">
    <title>Menú</title>
   
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-light blue fixed-top" id="head">
    <button id="sidebarCollapse" class="btn navbar-btn">
      <i class="fas fa-lg fa-bars"></i>
    </button>
    <a class="navbar-brand" href="">
      <h3 id="logo">Menú</h3>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse"   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="../iniciosesion/salir.php">
          <i class="fas fa-sign-out-alt"></i>
          Salir<span class="sr-only"></span></a>
        </li>
      </ul>
    </div>
  </nav>
        
  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h4><i class="fas fa-user"></i><?php echo $_SESSION['usuario'];?></h4>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#"><i class="fas fa-home"></i>Usuario</a>
            <ul>
              <li><a href="?accion=modificar" id="modificar">Modificar Contraseña</a>
              <li><a href="?accion=crear" id="crear">Crear Usuario</a>
              <li><a href="?accion=mostrar" id="cambiar">Gestionar Usuario</a>                   
            </ul>
        </li>
        <li>
          <a href=""><i class="fas fa-clipboard"></i>Manejo de Gestiones</a>
             <ul>
                 <li><a href="#">Gestión del Personal</a>
                 <li><a href="#">Asistencias</a>
                 <li><a href="#">Gestión de Informes</a>  
                 <li><a href="#">Monitoreo del Personal</a>    
              </ul>
        </li>
        <li>
          <a href=""><i class="fas fa-user-cog"></i>Configuración</a>
             <ul>
                 <li><a href="#">Copia de Seguridad</a>
                 <li><a href="#">Interfaz e Idioma</a>
                 <li><a href="#">Fecha y Hora</a>
                 <li><a href="#">Impresoras</a>
                 <li><a href="#">Borrar Datos</a>
                 <li><a href="#">Empresa</a>                          
             </ul>
        </li>
        <li>
          <a href=""><i class="fas fa-info"></i>Info</a>
        </li>
      </ul>
    </nav>

    <div id="content">  
       <?php   
   if (isset($_GET['accion'])) {
      if ($_GET['accion']=="modificar") {
        require_once 'vistamodificar.php';
      }
   }
      ?>

    <?php   
      if (isset($_GET['accion'])) {
          if ($_GET['accion']=="mostrar") {
            require_once 'vistaprincipal.php';
          }
      }
          ?>

    <?php   
      if (isset($_GET['accion'])) {
          if ($_GET['accion']=="crear") {
            require_once 'guardarusuario.php';
          }
      }
          ?>

            
          </div>
    </div>
     

 
  </body>
</html>

<?php
    }else{
        header("location: ../iniciosesion/login.php");
    }
?>

