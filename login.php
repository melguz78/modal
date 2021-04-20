<?php
session_start();
include "Usuario.php";
$objUsuario = new Usuarios();

?>

<!DOCTYPE html>
 <html lang="es">
 <head>
     <meta charset="UTF-8">
    
     <title>Document</title>
  <script scr="js/"></script>
   <script src="js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
   
    

<script> 
                $(document).ready(function(){
//programacion de boton llenar formulario 
               
                 $("#btnLlenar").on("click", function(){

                $('#miModal').modal({backdrop:'static', keyboar:false});
                 });

});

                </script>  
 </head>
 <body>
 <br>
      <input type="button"  value="Llenar formulario" name="btnLlenar" id="btnLlenar" class="btn btn-danger">
        <br><br>
        <div id="miModal" class="modal fade show" role="dialog" aria-hidden="true" >
            <div class="modal-dialog modal-lg">
                        <div class="modal-content" style="width: 400px;">
                            <div class="modal-header">
                            <div  style="width: 390px;"   class="form-group;" >       
                          
                <div class="form-control" style="width: 500px;" center>
                <h4>login</h4> <hr>
                <br><br>
              
                    <fieldset>
                        <legend >Formulario</legend>
                                <form action="login.php" method="post">
                                <input type="text" name="txtUsuario" placeholder="Nombre de Usurio" class="form-control"><br><br>
                                <input type="password" name="txtPass" placeholder="Contraseña" class="form-control"><br><br>
                                <input type="submit" name="btnLogin" value="Validar" class="btn btn-success">
                                 </form>
                    
                    </fieldset>
                   
                </div>
               
                </div>
                 </div>
                     </div>
                          </div>
                          </div>
            <?php

            if($_POST){

                $usuario = $_REQUEST["txtUsuario"];
                $contra = $_REQUEST ["txtPass"];

    
                $objUsuario-> setNombreuser($usuario);
                $objUsuario->setPass($contra);
                $nivel=$objUsuario-> validar();

                if($nivel != ""){

                    $_SESSION ["usuario"] ["nivel"]=$nivel;
                    $_SESSION["usuario"] ["usuario"]=$usuario;
                            header("location: index.php");

                }else{

                    header("location: login.php");
                }
            }

            if( isset($_REQUEST["cerrar"])){
                 session_destroy();
                 header("location: login.php");

            }


            ?>
            
          
 </body>
 </html>