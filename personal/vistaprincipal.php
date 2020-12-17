<?php
  require_once '../../.././personal/modelo/personaldao.php';
  $dao=new PersonalDao();
  $personal=$dao->listapersonal();
  $tam=sizeof($personal);
  require_once 'consultapersonal.php';