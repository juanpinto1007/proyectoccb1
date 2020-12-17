<?php
require_once '../../.././personal/modelo/gestiondao.php'; 
$dao=new GestionDao();
if ($_SERVER['REQUEST_METHOD']=='GET') {
    $asistencia = unserialize(base64_decode($_GET['objeto']));
    $identidad_id=$asistencia["identidad_id"];
    $excusa='✓';
    $fecha = $asistencia["fecha"];
   $actualizar=$dao->actualizarexcusa($fecha,$identidad_id,$excusa);
 
}

require_once '../../.././personal/agregarexcusa.php';

