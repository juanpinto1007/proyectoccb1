<?php
if(isset($_GET['accion'])){

    /* Gestion de usuario */
    
    if($_GET['accion']=="mostrar"){
        require_once '../app/vistaprincipal.php';
    }
    else if($_GET['accion']=="guardar"){
        require_once '../app/guardarusuario.php';
    }
    else if($_GET['accion']=="eliminar"){
        require_once '././modulo/app/eliminar.php';
    }
    else if($_GET['accion']=="actualizar"){
        require_once '../app/actualizar.php';
    }
    else if($_GET['accion']=="modificar"){
        require_once '../app/modificar.php';
    }

    /* Gestion del personal */

    else if($_GET['accion']=="guardarpersonal"){
        require_once '../../.././personal/guardarpersonal.php';
    }
    else if($_GET['accion']=="monitoreo"){
        require_once '../../.././personal/monitoreo.php';
    }
    else if($_GET['accion']=="asistencia"){
        require_once '../../.././personal/agregarexcusa.php';
    }
    else if($_GET['accion']=="informe"){
        require_once '../../.././personal/reporte.php';
    }
    else if($_GET['accion']=="mostrarpersonal"){
        require_once '../../.././personal/vistaprincipal.php';
    }
    else if($_GET['accion']=="actualizarpersonal"){
        require_once '../../.././personal/actualizarpersonal.php';
    }

    else if($_GET['accion']=="empresa"){
        require_once '../../.././personal/guardarempresa.php';
    }

    else if($_GET['accion']=="editar"){
        require_once '../../.././personal/editarempresa.php';
    }

    else if($_GET['accion']=="registrovisitante"){
        require_once '../../.././personal/registrovisitante.php';
    }
    else if($_GET['accion']=="gestionmonitoreo"){
        require_once '../../.././personal/gestionmonitoreo.php';
    }
    else if($_GET['accion']=="guardarvisitante"){
        require_once '../../.././personal/guardarvisitante.php';
    }
    else if($_GET['accion']=="controladorexcusa"){
        require_once '../../.././personal/controladorexcusa.php';
    }
    else if($_GET['accion']=="info"){
        require_once '../../.././personal/info.php';
    }

    else if($_GET['accion']=="inicio"){
        require_once '../app/bienvenida.php';
    } 
    else{
        require_once '../app/bienvenida.php';
    }

}
else{
    require_once '../app/bienvenida.php';
}
 