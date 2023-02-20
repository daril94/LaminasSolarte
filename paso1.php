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
            input[type=number]::-webkit-inner-spin-button, 
            input[type=number]::-webkit-outer-spin-button { 
                -webkit-appearance: none; 
                margin: 0; 
            }
            input[type=number] { -moz-appearance:textfield; }

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
            <form method="POST" <?php echo "action='?paso=2&hoja=1'" ?>>

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Parte superior del formulario--> 
                            <div class="row">
                                <div class="col-md-12">                                       
                                   
                                    <!--Genera una linea azul--> 
                                    <div class="lineOrange "> </div>

                                    <div class="lineOrangeTitle">
                                        <p class="alignV" style="font-size:13px; background-color: whitesmoke; color: #929497;"> 
                                            Por favor llene los datos de facturación y a continuación copie su número de pedido.
                                        </p>
                                    </div> 
                                    <div  style="font-size:13px; background-color: whitesmoke; color: #929497; padding:30px" >  
                                        <table class="tablePasos" id="tabla" style="margin: 0 auto; text-align: center; border-collapse: separate;">
                                            <tr class="tdNegro">
                                                <td align="center"> <label for="nombre">Nombre y Apellido</label> </td>                    
                                                <td>&nbsp;&nbsp; </td>
                                                <td align="center"> <label for="email">E-mail</label> </td>                    
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <label for="telefono">Teléfono</label> </td>
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <label for="direccion">Dirección</label> </td>                    
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <label for="ccRuc">CC/RUC</label> </td>
                                            </tr>  
                                            <tr>
                                                <td align="center"> <input  type="text" name="Nombre" id="nombre" value=""  required> </td>                    
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <input  type="text" name="Email" id="email" value=""  > </td>                    
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <input  type="number" name="Telefono" id="telefono" value="" min="" required  > </td>
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <input  type="text" name="Direccion" id="direccion" value=""  required> </td>                    
                                                <td>&nbsp;&nbsp;</td>
                                                <td align="center"> <input  type="number" name="CcRuc" id="ccRuc" value="" min="" required > </td>
                                            </tr>  


                                        </table> 
                                    </div>
                                    <div class="lineOrange"></div>


                                    <div class="lineOrangeTitle">
                                        <p class="alignV" style="font-size:15px; background-color: whitesmoke; color: #929497;"> 
                                            Por favor seleccione el VENDEDOR, SECTOR Y TIPO DE PEDIDO
                                        </p>
                                    </div> 

                                    <!--Genera una linea azul--> 
                                    <div class="lineOrange"></div>

                                    <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                        <p class="alignV">
                                            VENDEDOR                                           
                                        </p>    
                                    </div>

                                    <div class="lineOrange"></div>


                                    <div  style="font-size:13px; background-color: whitesmoke; color: black; padding-top: 10px; padding-bottom: 10px">    
                                        <table style="margin: 0 auto;">
                                            <tr>
                                                <td align="center"> <label for="almacen">Carlos Naranjo</label> </td>                    
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label for="domicilio">Eduardo Velásquez</label> </td>
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <label for="provincia">Provincia</label> </td>
                                            </tr>  
                                            <tr>
                                                <td align="center"> <input  type="radio" name="Vendedor" id="almacen" value="Carlos Naranjo"  required> </td>                    
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <input  type="radio" name="Vendedor" id="domicilio" value="Eduardo Velásquez"  required> </td> 
                                                <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                <td align="center"> <input  type="radio" name="Vendedor" id="provincia" value="Provincia"  required onClick="muestra_oculta('contenido')"> </td> 
                                            </tr>  

                                        </table>  
                                    </div>



                                    <div class="lineOrange"></div>
                                    <div id="contenido">

                                        <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                            <p class="alignV">
                                                SECTOR
                                            </p>    
                                        </div>
                                        <div class="lineOrange"></div>



                                        <div  style="font-size:13px; background-color: whitesmoke; color: black; padding-top: 10px; padding-bottom: 10px">   
                                            <table style="margin: 0 auto;">
                                                <tr>
                                                    <td align="center"> <label for="chillos">Valle de los Chillos</label> </td>                    
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <label for="sur">Sur</label> </td> 
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <label for="centro">Centro</label> </td>                    
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <label for="norte">Norte</label> </td> 
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <label for="cumbaya">Valle de Cumbayá</label> </td>                    

                                                </tr>  
                                                <tr>
                                                    <td align="center"> <input  type="radio" name="Sector" id="chillos" value="Valle de los Chillos"  > </td>                    
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <input  type="radio" name="Sector" id="sur" value="Sur"  > </td> 
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <input  type="radio" name="Sector" id="centro" value="Centro"  > </td> 
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <input  type="radio" name="Sector" id="norte" value="Norte"  > </td> 
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <input  type="radio" name="Sector" id="cumbaya" value="Valle de Cumbayá"  > </td> 
                                                </tr>  

                                            </table>  
                                        </div>



                                        <div class="lineOrange"></div>

                                        <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                            <p class="alignV">
                                                TIPO DE PEDIDO 
                                            </p>    
                                        </div>
                                        <div class="lineOrange"></div>


                                        <div  style="font-size:13px; background-color: whitesmoke; color: black; padding-top: 10px; padding-bottom: 10px">    
                                            <table style="margin: 0 auto;">
                                                <tr>
                                                    <td align="center"> <label for="almacen">Almacen</label> </td>                    
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <label for="domicilio">Domicilio</label> </td>                  
                                                </tr>  
                                                <tr>
                                                    <td align="center"> <input  type="radio" name="Entrega" id="almacen" value="Almacen"  > </td>                    
                                                    <td>&nbsp;&nbsp; &nbsp; &nbsp;</td>
                                                    <td align="center"> <input  type="radio" name="Entrega" id="domicilio" value="Domicilio"  > </td> 
                                                </tr>  

                                            </table>  
                                        </div>

                                    </div>
                                    <div style="padding-top: 50px;"></div>
                                    <input type="submit" value="Seguir al Paso 2"  id="send">
                                </div>

                            </div>

                        </div>

                    </div>








                </div>

            </form>
        </div>
    </body>
</html>
