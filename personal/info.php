

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de </title>
    </head>
    <style>


.container{
    
    font-family: sans-serif;
    width:50%;
    height:35vw;
/*     background:#eff4ff;
 */    margin:0 auto;
    margin-top:3%;
    border-radius:5px;
    overflow:hidden;
 
}
.emcabezado{
    background:#007bff;
    width:100%;
    height:5vw;
    padding:2%;
    border-radius:5px;
    position:relative;
    top:5%;
    margin:0 auto;
}



label{
margin:2%;
}
#linki{
    text-decoration:none;
    color:DodgerBlue;
    margin:2%;
}

input{
    width:30%;
    font-size:1.5vw;
    border-radius:5px;
    outline:none;
    cursor: pointer;
    height:3vw;
    text-align:center;
    margin-left:2%;
    margin-top:8%;

}
.primario {
  color: #fff;
  background-color: #007bff;
  border-color: #007bff;
}

.primario:hover {
  color: #fff;
  background-color: #0069d9;
  border-color: #0062cc;
}

.primario:focus, .primario.focus {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
}
#imagen{
    width:30%;
    margin-top:1%;
    border-radius:10px;
    margin-left:2%;
}




    </style>
</head>
<body>



<form action="" method="post">
    <div class="container">
     
        <div class="emcabezado">
        <center>  <h3 >Acerca de</h3> </center><br>
        </div>
         
        


           <input type="button" class="primario" value="Actualizacion" style="font-size:1.3vw;"><br><br>
           <label style="font-size:1.3vw;"><strong>Sitio oficial</strong></label><br><br>
           <a href="https://www.Infotechnologyassociationsla.blogspot.com
           " style="font-size:1.3vw;"  id="linki">https://www.Infotechnologyassociationsla.blogspot.com</a><br><br>

           <label style="font-size:1.3vw;">Version 1.0.2</label>  
           <div class="img">
               <img  src="../assets/img/logo1.png" id="imagen">  </div>
    
        
           

    </div>
</form>
</body>
</html>
