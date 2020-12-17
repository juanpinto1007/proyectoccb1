<?php
    include 'conexion.php';

    class GestionDao extends Conexion{

      public function insertarmonitoreo($identidad_id,$fecha,$hora,$accion,$descripcion){

         $mensaje="";

         try{

             $conexion=Conexion::conectar();//primero se conecta a la base de datos
             $sql="INSERT INTO historial (identidad_id, fecha, hora, accion, descripcion_ac) 
             VALUES(:identidad_id, :fecha, :hora, :accion, :descripcion)";
             $stmt=$conexion->prepare($sql);
            //recibe el sql y prepara
             $stmt->bindParam(":identidad_id",$identidad_id);
             $stmt->bindParam(":fecha",$fecha);
             $stmt->bindParam(":hora",$hora);
             $stmt->bindParam(":accion",$accion);
             $stmt->bindParam(":descripcion",$descripcion);
             $stmt->execute();
             $mensaje= "Ok";
              
         }//cierre del try
         catch(PDOException $e){

              if($e->errorInfo[1]==1452){
                 $mensaje="Usuario no hace parte de la base de datos";
             }
             else{
                 echo $e->errorInfo[1];
                 echo var_dump($e->errorInfo);
             }

             $stmt=null;
         }//cierre del catch
          //para cerrar la conexión 
         return $mensaje;
     }
  
     public function listaAsistencia($fecha){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM historial where fecha=:fecha order by hora ;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":fecha", $fecha);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    public function listaIdentidad($identidad_id){
        $conexion=Conexion::conectar();         
        $sql="SELECT identidad_id FROM personal where identidad_id=:identidad_id;";         
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":identidad_id", $identidad_id);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    public function fechaAsistencia($fecha,$identidad_id){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM historial where fecha=:fecha and identidad_id=:identidad_id order by identidad_id asc;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":fecha", $fecha);
        $stmt->bindParam(":identidad_id", $identidad_id);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    public function personalNotificacion(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM vistapersonal;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    public function noAsistieron($fecha){
        $conexion=Conexion::conectar();         
        $sql="SELECT DISTINCT identidad_id FROM historial where fecha=:fecha;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->bindParam(":fecha", $fecha);
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    public function envioNotificacion(){
        $conexion=Conexion::conectar();         
        $sql="SELECT identidad_id, email, CONCAT(prinom, ' ', priapellido) As nombre, fecha FROM personal where cargo_id='1'; ";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }
    
    
    public function insertarasistencia($identidad_id,$fecha,$excusa){

        $mensaje="";

        try{

            $conexion=Conexion::conectar();//primero se conecta a la base de datos
            $sql="INSERT INTO excusa (identidad_id, fecha, excusa) 
            VALUES(:identidad_id, :fecha, :excusa)";
            $stmt=$conexion->prepare($sql);
           //recibe el sql y prepara
            $stmt->bindParam(":identidad_id",$identidad_id);
            $stmt->bindParam(":fecha",$fecha);
            $stmt->bindParam(":excusa",$excusa);
            $stmt->execute();
            $mensaje= "Ok";
             
        }//cierre del try
        catch(PDOException $e){

             if($e->errorInfo[1]==1452){
                $mensaje="Usuario no hace parte de la base de datos";
            }
            else{
                echo $e->errorInfo[1];
                echo var_dump($e->errorInfo);
            }

            $stmt=null;
        }//cierre del catch
         //para cerrar la conexión 
        return $mensaje;
    }


    public function listaasistente(){
        $conexion=Conexion::conectar();         
        $sql="SELECT DISTINCT identidad_id, fecha, excusa FROM excusa";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }

    
    public function actualizarexcusa($fecha,$identidad_id,$excusa){

        $mensaje="";
        try{
          
          $conexion=Conexion::conectar();
          $sql="update excusa set excusa=:excusa where fecha=:fecha and identidad_id=:identidad_id";
          $stmt=$conexion->prepare($sql);
          $stmt->bindParam(":excusa",$excusa);
          $stmt->bindParam(":fecha",$fecha);
          $stmt->bindParam(":identidad_id",$identidad_id);
          $stmt->execute();
          $mensaje="Excusa agregada exitosamente!!";

        }// fin de try

        catch(PDOException $e){

          $mensaje="Problemas al Actualizar Consulte con el Administrador del Sistema!!";

        }// fin del catch

        return $mensaje;

       }// fin del metodo  


       public function vistainasistencia(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM vistainasistencia;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }
    public function estudianteinasistencia(){
        $conexion=Conexion::conectar();         
        $sql="SELECT * FROM estudianteinasistencia;";      
        $stmt = $conexion->prepare($sql); 
        $stmt->execute();
        $array=$stmt->fetchAll(PDO::FETCH_ASSOC);
        $stmt=null;  
        return $array;     
    }



}

