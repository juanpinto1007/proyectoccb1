<?php
//require("./util/phpmailer/phpmailer/src/restablecer.php");
require("./restablecer/restablecer.php");

$correo=new Restablecer();
echo $correo->enviarRestablecerCorreo("yucelismr123@gmail.com","Huevona","Yucelis gediendo maluca sopla peo");
