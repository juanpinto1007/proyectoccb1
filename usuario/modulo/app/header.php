<?php
        session_start();
        if(isset($_SESSION["usuario"])){
    ?>
          
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
     
     <?php
     if(empty($_GET['accion']) || $_GET['accion']<>'mostrarpersonal' & $_GET['accion']<>'monitoreo'){?>
  <div class="wrapper fixed-left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h4><i class="fas fa-user"></i><?php echo $_SESSION['usuario'];?></h4>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="#"><i class="fas fa-home"></i>Usuario</a>
            <ul>
              <li><a href="?accion=modificar">Modificar Contraseña</a>
              <?php if ($_SESSION['nivel'] == 3 || $_SESSION['nivel'] == 1 ){?>
              <li><a href="?accion=guardar">Crear Usuario</a>
              <li><a href="?accion=mostrar">Gestionar Usuario</a> 
              <?php
              }
            ?>                  
            </ul>
        </li>
        <li>
          <a href="#"><i class="fas fa-clipboard"></i>Manejo de Gestiones</a>
             <ul>
              <?php if ($_SESSION['nivel'] == 3 || $_SESSION['nivel'] == 1 ){?>
                 <li><a href="?accion=guardarpersonal">Gestión del Personal</a>
                 <?php
                   }
                  ?>   
                 <li><a href="?accion=monitoreo">Monitoreo del Personal</a>    
                 <?php if ($_SESSION['nivel'] == 3 || $_SESSION['nivel'] == 1 || $_SESSION['nivel'] == 2){?>
                 <!-- <li><a href="?accion=guardarpersonal">Gestión del Personal</a>  -->
                 <li><a href="?accion=asistencia">Asistencias</a>
                 <li><a href="?accion=informe">Gestión de Informes</a>  
                 <?php
                   }
                  ?>  
              </ul>
        </li>
     <?php if ($_SESSION['nivel'] == 3 || $_SESSION['nivel'] == 1 ){?>     
        <li>
          <a href=""><i class="fas fa-user-cog"></i>Configuración</a>
             <ul>
                 <li><a href="?accion=empresa">Institución</a>                          
             </ul>
        </li>
        <?php
          }
        ?>
        <li>
          <a href="?accion=info"><i class="fas fa-info"></i>Info</a>
        </li>
      </ul>
    </nav>
     <?php }?>
 <!--    <div id="content"> 


    </div> -->
   
<?php
    }else{
        header("location: ../iniciosesion/login.php");
    }
?>

