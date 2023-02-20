
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    </head>   
    <body>   

        <!-- Este div llamado padre, simplemente tiene un ancho y alto del 100% -->
        <div id="padre">      


            <!-- Formulario que almacena todos los datos -->        
            <form method="post" action="">

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Parte superior del formulario--> 
                            <div class="row">
                                <div class="lineOrangeTitle" style="font-size:12px; background-color: black; color: white">
                                    <p class="alignV"> 
                                        HOJA DE PEDIDO 2018 
                                    </p>
                                </div> 
                                <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                    <p class="alignV"> 
                                        <b>PEDIDO ENVIADO EXITOSAMENTE</b>
                                    </p>
                                </div>
                                <div class="lineOrange"> </div> 
                                <div >                                       
                                    <img  src="img/pasoFinal.jpg"  alt="Paso Final" width="100%" >

                                </div> 
                                <div class="lineOrange"> </div> 
                                <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                    <p class="alignV"> 
                                        <a style="color:black"href="www.laminassolarte.com">WWW.LAMINASSOLARTE.COM</a>
                                    </p>
                                </div>
                                <br>
                                <input type="button" value="Imprimir Pedido"  onclick="location = 'process/pdf.php'" name="" id="send2">
                                <input type="button" value="Volver a la Página"  name="" id="send" onclick="location = 'process/retornar.php'">





                            </div>

                        </div>

                    </div>
                </div>

            </form>






        </div>


    </body>
</html>
