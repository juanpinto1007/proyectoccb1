 
      <?php
    
        require_once '../modelo/usuariodao.php';
      
        if(isset($_POST['user']) & isset($_POST['pass'])){

         $dao=new UsuarioDao();
         $consulta = $dao->listaUsuarios();
         $tam=sizeof($consulta);
         session_start(); 

        $usuario=htmlspecialchars($_POST['user']);
        $password=htmlspecialchars($_POST['pass']);

      for($i=0;$i<$tam;$i++)
         {       
        if ($usuario==$consulta[$i]['identidad_id'] && $password==$consulta[$i]['pass']) {
             $_SESSION['usuario'] = $consulta[$i]['identidad_id'];
             $_SESSION['nivel'] = $consulta[$i]['nivel'];
             $_SESSION['contraseña'] = $consulta[$i]['pass'];
             header("location: ../app/index.php");           
        } 
        
        else{
             ?>
            <?php   
            require_once 'login.php'; 
           echo' <script>
                  var mens = document.querySelector("#mensaje");
                  mens.style.display = "block";
            </script>';
            ?>
            <?php
      } 
      
    }   
 } 



    ?>
      
  
      
 





 