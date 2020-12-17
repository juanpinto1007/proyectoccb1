<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/stylemonitoreo.css">
        
        <title>Monitoreo</title>
    </head>

    <body>
    <h2 class="titulo-h2">Monitoreo</h2>
        <hr>
        <div class="contenedor">
            <div class="bloque-primero">
        <form action="?accion=monitoreo" method="post" name="asistencia">
                <div class="botones">
                    <button class="btn solid btn-fin" type="submit" name="boton" value="notificaciones" onclick='javascript:return asegurar();'>Enviar Notificaciones</button>
                      <!-- <a href="?accion=registrovisitante"><button class="btn solid btn-fin" type="submit">Registrar Visitantes</button></a> -->
                    <a href="?accion=registrovisitante" class="btn solid btn-fin" style="display:flex;align-items:center;justify-content:center">Registrar Visitantes</a> 
                </div>
                <div class="registrar">
                <div class="des">
                    <label class="descripcion">Descripcion del Accesorio</label>
                    <textarea name="text" class="text" rows="25" role="50" placeholder="Descripcion del accesorio"></textarea>
                </div> 

                  <h2 class="h2-excluir">Asistencia</h2> 
                  <input type="number" name="identidad" class="id" placeholder="Numero de Identidad">
                  <button type="submit" name="boton" class="btn-asistencia" value="confirmar">Confirmar</button>
                  <button type="submit" name="boton" class="btn-asistencia" value="limpiar">Limpiar</button>
                </div>

             </div>
             </form>

            <div class="bloque-segundo">
                <div class="tabla">
                    <div class="mostrar-usuarios">
                        <table  id="tabla" style="width: 100%;">
                           <!--  <tr> -->
                                <thead>
                                    <th>Identificación</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Desc_Accesorio</th>
                                    <th>Accion</th>
                                </thead>
                                <tbody>
                                    <?php
                                        require_once '../../.././personal/gestionmonitoreo.php';
                                    ?>
                                </tbody>
                            <!-- </tr> -->
                        </table>
                    </div>
                </div>
                <form action="?accion=monitoreo" method="post">
            <div class="registro-vd">
                
             
            <a href="?accion=inicio" class="btn btn-primary">Atras</a>

        </div>


      <script>

        function asegurar ()
        {
            rc = confirm("¿Seguro que desea Eviar Notificaciones?");
            return rc;
        }

         $(document).ready(function () {
            $('#tabla').dataTable({
                "language": {
                    "url": "../assets/bootstrap/js/Spanish.json"
                },
                dom: 'Bfrtip',
                "pageLength": 5
            });
        }); 

      </script>

    </body>

    </html>