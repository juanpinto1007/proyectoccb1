<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
     
    $identidad_id=base64_decode($_GET['identidad_id']);
    require_once './modelo/personaldao.php';
    $dao=new PersonalDao();
    $dao->eliminarUsuario($identidad_id);
    header("location:/spaccb1/usuario/modulo/app/?accion=mostrarpersonal");

}