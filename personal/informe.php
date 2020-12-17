<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".././usuario/modulo/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href=".././usuario/modulo/assets/fontawesome/css/all.min.css"> 
    <title>Gestión De Infome</title>
    <style>

.abs-center{
    display: flex;   
    justify-content: center;
    min-height: 50vh;    
}
  
form{
    width: 60vw;
    background:#3498DB; 
    
}   
 

h3{
  text-align: center;
  color: #fff;
}

.row .btninforme button{
        width: 50%;
        margin:2%;
}

.excusa select{
    position: relative;
    top: 40%;
}

.btngenerar{
    position:relative;
    left: 700px;
    top: 50%;
}

    </style>
</head>
<body>

    <div class="container">
       <div class="abs-center">
        <form action="#" class="border p-3 form" >
        <h3>GESTION DE INFORME</h3><br>
            <div class="row">
                <div class="col-lg-6 btninforme">
                    <button class="btn btn-primary">Informe De La Institución</button><br>
                    <button class="btn btn-primary">Informe Por Salón</button><br>
                    <button class="btn btn-primary">Informe De Visitantes</button>
                </div>
             
             <div class="col-lg-6 excusa">
                <select name="" id="" class="form-control">
                    <option value="0">Selecionar Informe</option>
                    <option value="1">Anual</option>
                    <option value="2">Mensual</option>
                </select>
             </div>
            </div>

            <div class="row">
                 <div class="col-lg-6">
                        <button class="btn btn-primary btngenerar">Generar Informe</button>
                 </div>
            </div>
        </form>       
        </div>  
        </div> 

       
    <script src=".././usuario/modulo/assets/bootstrap/js/jquery.min.js"></script>
    <script src=".././usuario/modulo/assets/bootstrap/js/popper.min.js"></script>
    <script src=".././usuario/modulo/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src=".././usuario/modulo/assets/js/script.js"></script>   
</body>
</html>