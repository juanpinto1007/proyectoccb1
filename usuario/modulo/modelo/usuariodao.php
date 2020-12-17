<?php
    include 'conexion.php';

    class UsuarioDao extends Conexion{
    
        public function insertarUsuario($nivel,$identidad_id,$pass){

            $mensaje="";

            try{

                $conexion=Conexion::conectar();//primero se conecta a la base de datos
            
                $stmt=$conexion->prepare("INSERT INTO usuario (nivel, identidad_id, pass) VALUES (:nivel, :identidad_id, :pass)");
               //recibe el sql y prepara
                $stmt->bindParam(":nivel", $nivel);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->bindParam(":pass",$pass);
                $stmt->execute();
                $mensaje= "Guardó Usuario con exito";

            }//cierre del try
            catch(PDOException $e){

                if ($e->errorInfo[1]==1062) {
                    $mensaje="Usuario Existe";
                }
                else if($e->errorInfo[1]==1452){
                    $mensaje="Usuario no hace parte de la base de datos";
                }
                else{
                    echo $e->errorInfo[1];
                    // echo var_dump($e->errorInfo);
                }

                $stmt=null;
            }//cierre del catch
             //para cerrar la conexión 
            return $mensaje;
        }

  		public function listaUsuarios(){

			$conexion=Conexion::conectar();
			$sql="select * from usuario";
			$stmt=$conexion->prepare($sql);
			$stmt->execute();
			$array=$stmt->fetchAll(PDO::FETCH_ASSOC); //el fetch es para selecionar todas las columna de la tabla
			$stmt=null;//para cerrar la conexión 
			return $array;
        }
        
        public function listaUsuariomoderado(){

			$conexion=Conexion::conectar();
			$sql="select * from vistausuario";
			$stmt=$conexion->prepare($sql);
			$stmt->execute();
			$array=$stmt->fetchAll(PDO::FETCH_ASSOC); //el fetch es para selecionar todas las columna de la tabla
			$stmt=null;//para cerrar la conexión 
			return $array;
		}


        public function modificarContraseña($identidad_id,$pass){

            $mensaje="";

            try{
                    
                $conexion=Conexion::conectar();
                $sql="update usuario set pass=:pass where identidad_id=:identidad_id";
                $stmt=$conexion->prepare($sql);
                $stmt->bindParam(":pass",$pass);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->execute();
                $mensaje="Actualizó contraseña con exito!!";

            }
            catch(PDOException $e){
                $mensaje="Problemas al Actualizar, consulte con el Administrador de sistema!!";
            }

            return $mensaje;


        }


        public function actualizarUsuario($identidad_id,$nivel,$pass){

            $mensaje="";
            try{
              
              $conexion=Conexion::conectar();
              $sql="update usuario set pass=:pass,nivel=:nivel where identidad_id=:identidad_id";
              $stmt=$conexion->prepare($sql);
              $stmt->bindParam(":identidad_id",$identidad_id);
              $stmt->bindParam(":nivel",$nivel); 
              $stmt->bindParam(":pass",$pass);
              $stmt->execute();
              $mensaje="Actualizó Usuario con Exito!!";
    
            }// fin de try
    
            catch(PDOException $e){
    
              $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    
            }// fin del catch
    
            return $mensaje;
    
           }// fin del metodo   
           
           public function eliminarUsuario($identidad_id){
            $mensaje="";
              try{
    
                $conexion=Conexion::conectar();
                $sql="delete from usuario where identidad_id=:identidad_id";
                $stmt=$conexion->prepare($sql);
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->execute();
                $mensaje="Eliminó, Usuario con Exito";            
    
              }// fin del try
    
              catch(PDOException $e){
                $mensaje="Problemas al Eliminar consulte con el administrador";
    
              }// fin del catch
    
              return $mensaje;
          }// fin del metodo eliminarUsuario




    

}    


?>