<?php

if ($_SERVER['REQUEST_METHOD']=='GET') {
     
    $identidad_id=base64_decode($_GET['identidad_id']);
    require_once '../modelo/usuariodao.php';
    $dao=new UsuarioDao();
    $dao->eliminarUsuario($identidad_id);
    header("location:/spaccb1/usuario/modulo/app/?accion=mostrar");

}