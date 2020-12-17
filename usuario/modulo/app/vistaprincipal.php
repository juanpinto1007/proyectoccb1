<?php
  require_once '../modelo/usuariodao.php';
  $dao=new UsuarioDao();
  $usuarios=$dao->listaUsuariomoderado();
  $tam=sizeof($usuarios);
  require_once 'vistausuarios.php';