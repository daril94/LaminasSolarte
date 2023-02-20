<?php
session_start();
require_once 'process/guardarDatos.php';
require_once 'process/sumatoriaDatos.php';
guardarDatos(2);
sumatoria();

$continuar = false;
?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Hoja de Pedidos 2017-2018</title>
        <style>
            body{
                background: url(img/fondoS.jpg) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
        <script>
            $('#send').click(function () {
                $('#send').hide();
            });
        </script>


    </head>
    <body>           
        <!-- Este div llamado padre, simplemente tiene un ancho y alto del 100% -->
        <div id="padre">   
            <!-- Formulario que almacena todos los datos -->        
            <form method="post" action="process/final.php" onsubmit="this.send.disabled = true">                
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Parte superior del formulario--> 
                            <div class="row">
                                <div class="col-md-12">                                       
                                    <!--Genera una linea azul--> 
                                    <div class="lineOrange"> </div>                                    
                                    <div class="lineOrangeTitle">
                                        <p class="alignV" style="font-size:13px; background-color: whitesmoke; color: #929497;"> 
                                            A continuación se muestra el TOTAL de su pedido
                                        </p>
                                    </div> 
                                    <div  style="font-size:13px; background-color: whitesmoke; color: #929497; padding: 20px">  
                                        <table id="tabla" align="center">
                                            <tr class="tdNegro">
                                                <td align="center"> <label >Láminas</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Casas Armables</label> </td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Tabla de elementos</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Cartilla de las 4 operaciones</label> </td>  

                                            </tr>  
                                            <tr>
                                                <td align="center"> <?php echo $_SESSION['Laminas'] ?></td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <?php echo $_SESSION['Casas'] ?></td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <?php echo $_SESSION['TablaElementos'] ?>  </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center">  <?php echo $_SESSION['Cartilla4Operaciones'] ?></td> 

                                            </tr> 
                                        </table> 
                                    </div>
                                    <div  style="font-size:13px; background-color: whitesmoke; color: #929497; padding: 20px">  
                                        <table id="tabla" align="center">
                                            <tr class="tdNegro">

                                                <td align="center"> <label >Mapas Full Color A3</label> </td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Croquis A4</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Libros para colorear</label> </td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Cucas</label> </td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Afiches</label> </td>  


                                            </tr>  
                                            <tr>


                                                <td align="center"> <?php echo $_SESSION['MapasFullColor'] ?></td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <?php echo $_SESSION['CroquisA4'] ?>  </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center">  <?php echo $_SESSION['LibrosColorear'] ?></td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center">  <?php echo $_SESSION['Cucas'] ?></td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center">  <?php echo $_SESSION['Afiches'] ?></td> 

                                            </tr> 
                                        </table> 
                                    </div>

                                    <div  style="font-size:13px; background-color: whitesmoke; color: #929497; padding: 20px">  
                                        <table id="tabla" align="center">
                                            <tr class="tdNegro">
                                                <td align="center"> <label >Cuerpos Sueltos Grandes</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Billetes y Monedas</label> </td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Libro 28 Figuras</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label >Muestras de clases de suelos</label> </td>  

                                            </tr>  
                                            <tr>
                                                <td align="center"> <?php echo $_SESSION['CuerposSueltos'] ?></td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <?php echo $_SESSION['BilletesMonedas'] ?></td>  
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <?php echo $_SESSION['Libro28FG'] ?>  </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center">  <?php echo $_SESSION['MuestrasSueli'] ?></td> 



                                            </tr> 
                                        </table> 


                                    </div>

                                    <br>
                                    <input type="submit" value="Confirmar Pedido"  name="send" id="send" >

                                    <input type="button" value="Regresar al Paso 2"  name="send2" id="send2" onclick="location = '?paso=2&hoja=1'" >
                                </div>
                            </div>
                        </div>
                    </div>
            </form>






        </div>


    </body>
</html>
