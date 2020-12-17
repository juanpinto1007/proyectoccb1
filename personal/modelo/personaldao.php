<?php
    include 'conexion.php';

    class PersonalDao extends Conexion{
    

        public function insertarpersonal($identidad_id,$prinom,$segnom,$priapellido,$segapellido,$fecha_nacimiento,$grado,$cargo_id,$idciudad,$barrio,$direccion,$email,$telefono){

            $mensaje="";

            try{

                $conexion=Conexion::conectar();//primero se conecta a la base de datos
            
                $stmt=$conexion->prepare("INSERT INTO personal (identidad_id, prinom, segnom, priapellido, segapellido, 
                    fecha_nacimiento, grado, cargo_id, idciudad, barrio, direccion, email, telefono) 
                    VALUES (:identidad_id, :prinom, :segnom, :priapellido, :segapellido, :fecha_nacimiento,:grado, 
                     :cargo_id, :idciudad, :barrio, :direccion, :email, :telefono)");
               //recibe el sql y prepara
                $stmt->bindParam(":identidad_id",$identidad_id);
                $stmt->bindParam(":prinom",$prinom);
                $stmt->bindParam(":segnom",$segnom);
                $stmt->bindParam(":priapellido",$priapellido);
                $stmt->bindParam(":segapellido",$segapellido);
                $stmt->bindParam(":fecha_nacimiento",$fecha_nacimiento);
                $stmt->bindParam(":grado",$grado);
                $stmt->bindParam(":cargo_id",$cargo_id);
                $stmt->bindParam(":idciudad",$idciudad);
                $stmt->bindParam(":barrio",$barrio);
                $stmt->bindParam(":direccion",$direccion);
                $stmt->bindParam(":email",$email);
                $stmt->bindParam(":telefono",$telefono);
                $stmt->execute();
                $mensaje= "Guardó con exito";

            }//cierre del try
            catch(PDOException $e){

                if ($e->errorInfo[1]==1062) {
                    $mensaje="Usuario Existe";
                }
                else if($e->errorInfo[1]==1406){
                  $mensaje="Error, por favor verificar la informacion suministrada.";
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

         
  		public function listapersonal(){

			$conexion=Conexion::conectar();
			$sql="SELECT * FROM vistapersonal;";
			$stmt=$conexion->prepare($sql);
			$stmt->execute();
			$array=$stmt->fetchAll(PDO::FETCH_ASSOC); //el fetch es para selecionar todas las columna de la tabla
			$stmt=null;//para cerrar la conexión 
			return $array;
		}


        public function actualizarpersona($identidad_id,$prinom,$segnom,$priapellido,$segapellido,$fecha_nacimiento,$grado,$cargo_id,$idciudad,$barrio,$direccion,$email,$telefono){

            $mensaje="";
            try{
              
              $conexion=Conexion::conectar();
              $sql="update personal set  prinom=:prinom, segnom=:segnom, priapellido=:priapellido, segapellido=:segapellido, 
              fecha_nacimiento=:fecha_nacimiento, grado=:grado, cargo_id=:cargo_id, idciudad=:idciudad, barrio=:barrio, direccion=:direccion, email=:email, telefono=:telefono  where identidad_id=:identidad_id";
              $stmt=$conexion->prepare($sql);
              $stmt->bindParam(":identidad_id",$identidad_id);
              $stmt->bindParam(":prinom",$prinom); 
              $stmt->bindParam(":segnom",$segnom);
              $stmt->bindParam(":priapellido",$priapellido);
              $stmt->bindParam(":segapellido",$segapellido);
              $stmt->bindParam(":fecha_nacimiento",$fecha_nacimiento);
              $stmt->bindParam(":grado",$grado);
              $stmt->bindParam(":cargo_id",$cargo_id);
              $stmt->bindParam(":idciudad",$idciudad);
              $stmt->bindParam(":barrio",$barrio);
              $stmt->bindParam(":direccion",$direccion);
              $stmt->bindParam(":email",$email);
              $stmt->bindParam(":telefono",$telefono);
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
                $sql="delete from personal where identidad_id=:identidad_id";
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

          public function insertarconfi($nombre,$nit,$ciudad,$codigo,$direccion,$telefono,$email){
            $mensaje="";
              try{
    
                $conexion=Conexion::conectar();
                $sql="INSERT INTO configuracion (nombre, nit, ciudad, codigo_postal, direccion, tel, email)
                VALUES(:nombre,:nit,:ciudad, :codigo, :direccion, :telefono, :email)";
                $stmt=$conexion->prepare($sql);
                $stmt->bindParam(":nombre",$nombre);
                $stmt->bindParam(":nit",$nit);
                $stmt->bindParam(":ciudad",$ciudad);
                $stmt->bindParam(":codigo",$codigo);
                $stmt->bindParam(":direccion",$direccion);
                $stmt->bindParam(":telefono",$telefono);
                $stmt->bindParam(":email",$email);
                $stmt->execute();
                $mensaje="Guardó, con Exito";            
    
              }// fin del try
    
              catch(PDOException $e){
                $mensaje="Problemas al guardar consulte con el administrador";
    
              }// fin del catch
    
              return $mensaje;
          }// fin del metodo insertarconfi



          public function editarempresa($nombre,$nit,$ciudad,$codigo,$direccion,$telefono,$email){

            $mensaje="";
            try{
              
              $conexion=Conexion::conectar();
              $sql="update configuracion set  nombre=:nombre, ciudad=:ciudad, codigo_postal=:codigo, direccion=:direccion, 
              tel=:telefono, email=:email where  nit=:nit";
              $stmt=$conexion->prepare($sql);
              $stmt->bindParam(":nombre",$nombre);
              $stmt->bindParam(":nit",$nit); 
              $stmt->bindParam(":ciudad",$ciudad);
              $stmt->bindParam(":codigo",$codigo);
              $stmt->bindParam(":direccion",$direccion);
              $stmt->bindParam(":telefono",$telefono);
              $stmt->bindParam(":email",$email);
              $stmt->execute();
              $mensaje="Actualizó Datos con Exito!!";
    
            }// fin de try
    
            catch(PDOException $e){
    
              $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";
    
            }// fin del catch
    
            return $mensaje;
    
           }// fin del metodo   


           public function listaeditar(){

            $conexion=Conexion::conectar();
            $sql="SELECT * from configuracion";
            $stmt=$conexion->prepare($sql);
            $stmt->execute();
            $array=$stmt->fetchAll(PDO::FETCH_ASSOC); //el fetch es para selecionar todas las columna de la tabla
            $stmt=null;//para cerrar la conexión 
            return $array;
          }




}    


?>