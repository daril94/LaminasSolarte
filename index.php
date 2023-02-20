<?php
if (!isset($_GET['paso'])) {
    $_GET['paso'] = 1;
}
$paso = $_GET['paso'];
;

//$iNumeroP=$_GET['numeroPedido'];
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Hoja de Pedidos 2017-2018</title> 
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/stylesEcu.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/laminas.js" type="text/javascript"></script>

    </head>
    <body onload="cambiarHoja(); cambiarDivPasos()">             
        <div id="padre">    


            <div id="temp" >  

                <!-- margen superior -->
                <div style="padding-top: 100px;"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Tabla que muestra los pasos y sus lineas -->            
                            <div style="background-color: blue; height: 200px; padding-top: 5px">
                                <div class="lineOrangeTitle" style="font-size:12px; color: white">
                                    <p class="alignV"> 
                                        HOJA DE PEDIDO 2018 
                                    </p>
                                </div>     
                                <div class="lineOrangeTitle" style="font-size:13px; color: black;">
                                    <p class="alignV"> 
                                        Educamos a través del arte
                                    </p>
                                </div>
                                <table id="pasos" style="margin: 0 auto;">                      
                                    <tr>
                                        <td> &nbsp; &nbsp; Paso 1 </td>
                                        <td> &nbsp; &nbsp; Paso 2 </td>
                                        <td> &nbsp; &nbsp; Paso 3 </td>
                                        <td> &nbsp; &nbsp; Paso 4 </td>                        
                                    </tr>
                                    <tr>
                                        <td style="padding-top: 20px;">
                                            <div id="linePasos1"></div>
                                        </td>
                                        <td style="padding-top: 20px;">
                                            <div id="linePasos2"></div>
                                        </td>
                                        <td style="padding-top: 20px;">
                                            <div id="linePasos3"></div>
                                        </td>
                                        <td style="padding-top: 20px;">
                                            <div id="linePasos4"></div>
                                        </td>                        
                                    </tr>                    
                                </table>                   
                            </div>
                        </div>   
                    </div>  
                </div>  
            </div> 

            <br><br>


            <?php
            if ($paso == 1) {
                require_once 'paso1.php';
            }
            if ($paso == 2) {
                require_once 'paso2.php';
            }
            if ($paso == 3) {
                require_once 'paso3.php';
            }
            if ($paso == 4) {
                require_once 'paso4.php';
            }
            ?>





        </div>  


        <script src="jquery.min.js" type="text/javascript"></script>
        <script src="main.js" type="text/javascript"></script>
    </body>
</html>
