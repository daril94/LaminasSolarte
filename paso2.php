<?php
require_once 'process/guardarDatos.php';
guardarDatos(1);
if (!isset($_GET['hoja'])) {
    $_GET['hoja'] = 1;
}
$hoja = $_GET['hoja'];
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>HOJA DE PEDIDO</title>
        <style>

            body{
                background: url(img/fondoL.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>



    </head>
    <body onload="cambiarHoja();">   

        <!-- Este div llamado padre, simplemente tiene un ancho y alto del 100% -->
        <div id="padre">      
            <!-- -->
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <section>          
                            <div class="formulario">
                                <label for="caja_busqueda">Buscar</label>
                                <input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar el nombre o número de lámima"></input>
                            </div>
                            <div id="datos"></div>
                        </section>
                    </div>
                </div>
            </div>




            <!-- -->



            <!-- Formulario que almacena todos los datos -->        
            <form method="post" action="process/guardarForm.php">
                <?php
                if ($hoja == 1) {
                    require_once 'hoja1.php';
                }
                if ($hoja == 2) {
                    require_once 'hoja2.php';
                }
                if ($hoja == 3) {
                    require_once 'hoja3.php';
                }
                if ($hoja == 4) {
                    require_once 'hoja4.php';
                }
                ?>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Parte superior del formulario--> 
                            <div class="row">

                            </div>


                            <div class="row">
                                <div class="col-md-12">                                    
                                    <p class="textC" id="colorletra" style="color:black; padding: 25px; font-size:18px">

                                        <br>

                                        <input id="h1" style="border:none; outline: none; text-align: center;  line-height: 10px; background-color: transparent" type="submit" value="1"  name="enviar"  >
                                        <input id="h2" style="border: none;  outline: none; text-align: center;  line-height: 10px; background-color: transparent" type="submit" value="2"  name="enviar"  >
                                        <input id="h3" style="border: none; outline: none; text-align: center;  line-height: 10px; background-color: transparent" type="submit" value="3"  name="enviar"  >
                                        <input id="h4" style="border: none; outline: none; text-align: center;  line-height: 10px; background-color: transparent" type="submit" value="4"  name="enviar"  >                                        


                                    </p>



                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">                                      

                                    <input type="submit" value="Seguir al Paso 3"  name="enviar" id="send">
                                    <br><br><br>


                                    <div style="padding-top: 25px"></div>

                                </div>

                            </div>





                        </div>

                    </div>          

            </form>






        </div>
    </body>

</html>