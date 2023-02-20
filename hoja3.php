<?php ?>


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

    </head>
    <body>

        <!-- Este div llamado padre, simplemente tiene un ancho y alto del 100% -->
        <div id="padre">      




            <!-- Formulario que almacena todos los datos -->        
            <form method="post" name="">

                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <!-- Parte superior del formulario--> 
                            <div class="row">
                                <div class="col-md-12">                                       
                                    <div class="lineOrangeTitle" style="font-size:12px; background-color: black; color: white">
                                        <p class="alignV"> 
                                            HOJA DE PEDIDO 2018  
                                        </p>
                                    </div>     
                                    <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                                        <p class="alignV"> 
                                            Educamos a través del arte
                                        </p>
                                    </div>
                                    <!--Genera una linea azul--> 
                                    <div class="lineOrange"> </div>

                                    <div class="lineOrangeTitle">
                                        <p class="alignV" style="font-size:13px; background-color: whitesmoke; color: #929497;"> 
                                            Por favor haga su pedido. No olvide seleccionar mínimo 5 UNIDADES por tema  
                                        </p>
                                    </div> 
                                    <!--Genera una linea azul--> 
                                    <div class="lineOrange"></div>
                                </div>

                            </div>
                            <div class="row" style="background-color: whitesmoke; padding-top:10px; padding-bottom: 10px; margin: 0" >
                                <!-- Se crean 3 tablas diferentes para crear el formulario --> 
                                <div class="col-sm-4">          
                                    <table class="textI">

                                        <tr>
                                            <td> <input  type="number" name="(G11)G415" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G415'])) {echo $_SESSION['formularioHojas']['(G11)G415']; }?>"  min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;415 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL ARTÍCULO-GÉNERO Y NÚM.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G416" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G416'])) {echo $_SESSION['formularioHojas']['(G11)G416']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;416 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PRONOMBRE - CLASIFICACIÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G417" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G417'])) {echo $_SESSION['formularioHojas']['(G11)G417']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;417 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DIPTONGO TRIPTON. Y HIATO</label> </td>
                                        </tr> <tr>
                                            <td> <input  type="number" name="(G11)G418" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G418'])) {echo $_SESSION['formularioHojas']['(G11)G418']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;418 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL SINÓNIMOS Y ANTÓNIMOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G421" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G421'])) {echo $_SESSION['formularioHojas']['(G11)G421']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;421 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AGUDAS-GRAVES-ESDRÚJULAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G423"  value="<?php if (isset($_SESSION['formularioHojas']['(G11)G423'])) {echo $_SESSION['formularioHojas']['(G11)G423']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;423 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS BL - BR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G424" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G424'])) {echo $_SESSION['formularioHojas']['(G11)G424']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;424 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS CL - CR</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G11)G425" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G425'])) {echo $_SESSION['formularioHojas']['(G11)G425']; }?>" min="5" max="9999" step="5"  > </td>                    
                                            <td> &nbsp;&nbsp;425 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS FL - FR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G426" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G426'])) {echo $_SESSION['formularioHojas']['(G11)G426']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;426 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS GL - GR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G427" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G427'])) {echo $_SESSION['formularioHojas']['(G11)G427']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;427 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS PL - PR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G428" id="LaminaSG290" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G428'])) {echo $_SESSION['formularioHojas']['(G11)G428']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;428 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SÍLABAS TRABADAS DR - TR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G486" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G486'])) {echo $_SESSION['formularioHojas']['(G11)G486']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;486 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CUENTOS CLÁSICOS 1</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G11)G487" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G487'])) {echo $_SESSION['formularioHojas']['(G11)G487']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;487 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CUENTOS CLÁSICOS 2</label> </td>
                                        </tr> <tr>
                                            <td> <input  type="number" name="(G11)G488" value="<?php if (isset($_SESSION['formularioHojas']['(G11)G488'])) {echo $_SESSION['formularioHojas']['(G11)G488']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;488 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CUENTOS CLÁSICOS 3</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td></td>
                                        </tr>

                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="negrita textC">12.- HISTORIA - ERAS - PERÍODOS </td>                    
                                            <td></td>
                                        </tr>
                                        <tr>

                                            <td colspan="3" class="negrita textC">PRESIDENTES </td>                    

                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td> 
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G12)GP1"  value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP1'])) {echo $_SESSION['formularioHojas']['(G12)GP1']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P1 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;REFORMA Y CONTRARREFORMA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP2" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP2'])) {echo $_SESSION['formularioHojas']['(G12)GP2']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P2 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ESCLAVITUD</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP3" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP3'])) {echo $_SESSION['formularioHojas']['(G12)GP3']; }?>" min="5" max="9999" step="5"  > </td>                    
                                            <td> &nbsp;&nbsp;P3 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL ABSOLUTISMO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP5" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP5'])) {echo $_SESSION['formularioHojas']['(G12)GP5']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P5 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL FEUDALISMO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP6" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP6'])) {echo $_SESSION['formularioHojas']['(G12)GP6']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P6 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL CAPITALISMO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP7" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP7'])) {echo $_SESSION['formularioHojas']['(G12)GP7']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P7 </td>                    
                                            <td> <label for="">&nbsp;&nbspSOCIALISMO - COMUNISMO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP8" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP8'])) {echo $_SESSION['formularioHojas']['(G12)GP8']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P8 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA REAL AUDIENCIA DE QUITO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP9" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP9'])) {echo $_SESSION['formularioHojas']['(G12)GP9']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P9 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL MERCANTILISMO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP11" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP11'])) {echo $_SESSION['formularioHojas']['(G12)GP11']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P11 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS CRUZADAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP12" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP12'])) {echo $_SESSION['formularioHojas']['(G12)GP12']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P12 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INDEPENDENCIA DEL GUAYAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GP13" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GP13'])) {echo $_SESSION['formularioHojas']['(G12)GP13']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;P13 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ORÍGEN HOMBRE ECUATORIANO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G49" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G49'])) {echo $_SESSION['formularioHojas']['(G12)G49']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;49 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DESCUBRIMIEN. DE AMÉRICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G88" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G88'])) {echo $_SESSION['formularioHojas']['(G12)G88']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;88 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EVOLUCIÓN DE LA VIVIENDA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G204" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G204'])) {echo $_SESSION['formularioHojas']['(G12)G204']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;204 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;7 MARAVILL. DEL MUNDO ANTIG.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G250" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G250'])) {echo $_SESSION['formularioHojas']['(G12)G250']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;250 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EVOLUCIÓN DEL HOMBRE</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G291" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G291'])) {echo $_SESSION['formularioHojas']['(G12)G291']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;291</td>                    
                                            <td> <label for="">&nbsp;&nbsp;RENACIMIENTO 1</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G292" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G292'])) {echo $_SESSION['formularioHojas']['(G12)G292']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;292 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;RENACIMIENTO 2</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G295" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G295'])) {echo $_SESSION['formularioHojas']['(G12)G295']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;295 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;7 NUEVAS MARAVILLAS DEL MUN.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G316" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G316'])) {echo $_SESSION['formularioHojas']['(G12)G316']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;316 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;REVOLUCIÓN INDUSTRIAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G325" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G325'])) {echo $_SESSION['formularioHojas']['(G12)G325']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;325 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ORÍGEN HOMBRE AMERICANO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G356" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G356'])) {echo $_SESSION['formularioHojas']['(G12)G356']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;356 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA REVOLUCIÓN FRANCESA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G369" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G369'])) {echo $_SESSION['formularioHojas']['(G12)G369']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;369 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ERA PALEOLÍTICAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G370" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G370'])) {echo $_SESSION['formularioHojas']['(G12)G370']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;370 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ERA NEOLÍTICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G371" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G371'])) {echo $_SESSION['formularioHojas']['(G12)G371']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;371 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA EDAD DE LOS METALES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G374" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G374'])) {echo $_SESSION['formularioHojas']['(G12)G374']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;374 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA EDAD MEDIA</label> </td>
                                        </tr>                                 
                                        <tr>
                                            <td> <input  type="number" name="(G12)G400" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G400'])) {echo $_SESSION['formularioHojas']['(G12)G400']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;400 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOS VIAJES DE COLÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G402" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G402'])) {echo $_SESSION['formularioHojas']['(G12)G402']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;402 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PRIMERA GUERRA MUNDIAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G403" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G403'])) {echo $_SESSION['formularioHojas']['(G12)G403']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;403 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SEGUNDA GUERRA MUNDIAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G436" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G436'])) {echo $_SESSION['formularioHojas']['(G12)G436']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;436 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ESCULTURA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G485" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G485'])) {echo $_SESSION['formularioHojas']['(G12)G485']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;485 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL TAHUANTINSUYO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)G492" value="<?php if (isset($_SESSION['formularioHojas']['(G12)G492'])) {echo $_SESSION['formularioHojas']['(G12)G492']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;492 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA GUERRA FRÍA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE6" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE6'])) {echo $_SESSION['formularioHojas']['(G12)GE6']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E6 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERÍODO PRECERÁMICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE7"  value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE7'])) {echo $_SESSION['formularioHojas']['(G12)GE7']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E7 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERÍODO FORMATIVO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE8" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE8'])) {echo $_SESSION['formularioHojas']['(G12)GE8']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E8 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DESARROLLO REGIONAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE9"  value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE9'])) {echo $_SESSION['formularioHojas']['(G12)GE9']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E9 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERÍODO DE INTEGRACIÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE10" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE10'])) {echo $_SESSION['formularioHojas']['(G12)GE10']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E10 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SEÑORIOS ÉTNICOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE12" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE12'])) {echo $_SESSION['formularioHojas']['(G12)GE12']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E12 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL REINO DE QUITO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE13" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE13'])) {echo $_SESSION['formularioHojas']['(G12)GE13']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E13 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL INCARIO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE14" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE14'])) {echo $_SESSION['formularioHojas']['(G12)GE14']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E14 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA CONQUISTA ESPAÑOLA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE15" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE15'])) {echo $_SESSION['formularioHojas']['(G12)GE15']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E15 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA COLONIA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE16" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE16'])) {echo $_SESSION['formularioHojas']['(G12)GE16']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E16 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA INDEPENDENCIA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE17" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE17'])) {echo $_SESSION['formularioHojas']['(G12)GE17']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E17 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA GRAN COLOMBIA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE18" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE18'])) {echo $_SESSION['formularioHojas']['(G12)GE18']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E18 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;VIDA REPUBLICANA 1</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE19" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE19'])) {echo $_SESSION['formularioHojas']['(G12)GE19']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E19 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;VIDA REPUBLICANA 2</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE62" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE62'])) {echo $_SESSION['formularioHojas']['(G12)GE62']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E62 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PRESIDENTESDELECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G12)GE133" value="<?php if (isset($_SESSION['formularioHojas']['(G12)GE133'])) {echo $_SESSION['formularioHojas']['(G12)GE133']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E133 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DESMEMBRACIONES DEL ECU.</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>                                                      
                                            <td colspan="3" class="textC negrita">13.- INDUSTRIAS - PETROLEO </td>                   
                                        </tr>
                                        <tr>

                                            <td colspan="3" class="textC negrita">COMERCIO - SECTOR PRODUCTIVO </td>                    

                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G13)G190" value="<?php if (isset($_SESSION['formularioHojas']['(G13)G190'])) {echo $_SESSION['formularioHojas']['(G13)G190']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;190 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS INDUSTRIAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G13)G222" value="<?php if (isset($_SESSION['formularioHojas']['(G13)G222'])) {echo $_SESSION['formularioHojas']['(G13)G222']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;222 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;TIPOS DE COMERCIO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G13)G267" value="<?php if (isset($_SESSION['formularioHojas']['(G13)G267'])) {echo $_SESSION['formularioHojas']['(G13)G267']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;267 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DESMEMBRACIONES DEL ECU.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G13)G342" value="<?php if (isset($_SESSION['formularioHojas']['(G13)G342'])) {echo $_SESSION['formularioHojas']['(G13)G342']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;342 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL PETROLEO</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>

                                            <td colspan="3" class="textC negrita">14.- INSTRUMENTOS MUSICALES </td>                    

                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G14)GQ1" value="<?php if (isset($_SESSION['formularioHojas']['(G14)GQ1'])) {echo $_SESSION['formularioHojas']['(G14)GQ1']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;Q1 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INSTRUMENT. FOLKLÓRICOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G14)GQ2" value="<?php if (isset($_SESSION['formularioHojas']['(G14)GQ2'])) {echo $_SESSION['formularioHojas']['(G14)GQ2']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;Q2 </td>                    
                                            <td> <label for="n">&nbsp;&nbsp;SIGNOS MUSICALES</label> </td>
                                        </tr>
 


                                    </table>

                                </div>

                                <div class="col-sm-4">             

                                    <table class="textI">

                                        <tr>
                                            <td> <input  type="number" name="(G14)G93" value="<?php if (isset($_SESSION['formularioHojas']['(G14)G93'])) {echo $_SESSION['formularioHojas']['(G14)G93']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;93 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INSTR. MUSICALES - VIENTO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G14)G94" value="<?php if (isset($_SESSION['formularioHojas']['(G14)G94'])) {echo $_SESSION['formularioHojas']['(G14)G94']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;94 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INSTR. MUSICALES - CUERDA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G14)G95"  value="<?php if (isset($_SESSION['formularioHojas']['(G14)G95'])) {echo $_SESSION['formularioHojas']['(G14)G95']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;95 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INST. MUSICALES - PERCUSIÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G14)G238"  value="<?php if (isset($_SESSION['formularioHojas']['(G14)G238'])) {echo $_SESSION['formularioHojas']['(G14)G238']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;238 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;INST. MUSICALES - COMPLETA</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">15.- LA TIERRA - MOVIMIENTOS - </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">UNIVERSO - PLACAS - CLIMAS </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G15)GR2" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR2'])) {echo $_SESSION['formularioHojas']['(G15)GR2']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R2 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PRINCIPALES RÍOS ECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR3" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR3'])) {echo $_SESSION['formularioHojas']['(G15)GR3']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R3 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;OCÉANOS Y MARES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR4" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR4'])) {echo $_SESSION['formularioHojas']['(G15)GR4']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R4 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;4 MOVIMIENTOS TERRÁQUEOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR5" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR5'])) {echo $_SESSION['formularioHojas']['(G15)GR5']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R5 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ESTACIONES CLIMA-TIEMPO-AT.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR6" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR6'])) {echo $_SESSION['formularioHojas']['(G15)GR6']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R6 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAGOS Y LAGUNAS ECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR7" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR7'])) {echo $_SESSION['formularioHojas']['(G15)GR7']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R7 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CORDILLERA DE LOS ANDES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR8" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR8'])) {echo $_SESSION['formularioHojas']['(G15)GR8']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R8 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL ORIGEN DE LA VIDA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR9" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR9'])) {echo $_SESSION['formularioHojas']['(G15)GR9']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R9 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CORRIENTES MARINAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR10" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR10'])) {echo $_SESSION['formularioHojas']['(G15)GR10']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R10 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL DÍA Y LA NOCHE</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GR11"  value="<?php if (isset($_SESSION['formularioHojas']['(G15)GR11'])) {echo $_SESSION['formularioHojas']['(G15)GR11']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;R11 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CUERPOS CELESTES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G13" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G13'])) {echo $_SESSION['formularioHojas']['(G15)G13']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;13 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MOVIMIENTO TRASLACIÓNL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G14" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G14'])) {echo $_SESSION['formularioHojas']['(G15)G14']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;14 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MOV. ROTACIÓN Y NUTACIÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G74"  value="<?php if (isset($_SESSION['formularioHojas']['(G15)G74'])) {echo $_SESSION['formularioHojas']['(G15)G74']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;74 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL SISTEMA SOLAR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G89" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G89'])) {echo $_SESSION['formularioHojas']['(G15)G89']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;89 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL UNIVERSO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G161" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G161'])) {echo $_SESSION['formularioHojas']['(G15)G161']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;161 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS 4 ESTACIONES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G162" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G162'])) {echo $_SESSION['formularioHojas']['(G15)G162']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;162 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ACCIDENTES GEOGRÁFICOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G196" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G196'])) {echo $_SESSION['formularioHojas']['(G15)G196']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;196 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DESASTRES NATURALES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G203" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G203'])) {echo $_SESSION['formularioHojas']['(G15)G203']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;203 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PARALELOS Y MERIDIANOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G246" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G246'])) {echo $_SESSION['formularioHojas']['(G15)G246']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;246 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ELSOL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G247" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G247'])) {echo $_SESSION['formularioHojas']['(G15)G247']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;247 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA LUNA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G251" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G251'])) {echo $_SESSION['formularioHojas']['(G15)G251']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;251 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ORIENTACIÓN</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G252" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G252'])) {echo $_SESSION['formularioHojas']['(G15)G252']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;252 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA FORMA DE LA TIERRA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G253" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G253'])) {echo $_SESSION['formularioHojas']['(G15)G253']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;253 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA ESTRUCT. DE LA TIERRA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G262" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G262'])) {echo $_SESSION['formularioHojas']['(G15)G262']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;262 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;THEWEATHER-ELCLIMA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G263"  value="<?php if (isset($_SESSION['formularioHojas']['(G15)G263'])) {echo $_SESSION['formularioHojas']['(G15)G263']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;263 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;THECALENDER-ELCALEND.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G276"  value="<?php if (isset($_SESSION['formularioHojas']['(G15)G276'])) {echo $_SESSION['formularioHojas']['(G15)G276']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;276 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS ERAS GEOLÓGICAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G296" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G296'])) {echo $_SESSION['formularioHojas']['(G15)G296']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;296 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOS CLIMAS DEL MUNDO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G337" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G337'])) {echo $_SESSION['formularioHojas']['(G15)G337']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;337 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL CALENTAMIENTO GLOBAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G360" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G360'])) {echo $_SESSION['formularioHojas']['(G15)G360']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;360</td>                    
                                            <td> <label for="">&nbsp;&nbsp;HUSOS HORARIOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G366" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G366'])) {echo $_SESSION['formularioHojas']['(G15)G366']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;366 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS ESTRELLAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G367" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G367'])) {echo $_SESSION['formularioHojas']['(G15)G367']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;367 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS CONSTELACIONES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G368" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G368'])) {echo $_SESSION['formularioHojas']['(G15)G368']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;368</td>                    
                                            <td> <label for="">&nbsp;&nbsp;GALAXIAS Y NEBULOSAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G372" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G372'])) {echo $_SESSION['formularioHojas']['(G15)G372']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;372 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAATMÓSFERA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G373" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G373'])) {echo $_SESSION['formularioHojas']['(G15)G373']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;373 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOS SATÉLITES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)G422" value="<?php if (isset($_SESSION['formularioHojas']['(G15)G422'])) {echo $_SESSION['formularioHojas']['(G15)G422']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;422 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PLACAS TECTÓNICAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GE67" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GE67'])) {echo $_SESSION['formularioHojas']['(G15)GE67']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E67 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CALLEJÓN INTERANDINO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GE68"  value="<?php if (isset($_SESSION['formularioHojas']['(G15)GE68'])) {echo $_SESSION['formularioHojas']['(G15)GE68']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E68 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;8 REG. NATURALES DEL ECUAD.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GE76" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GE76'])) {echo $_SESSION['formularioHojas']['(G15)GE76']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E76 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LAS HOYAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GE93" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GE93'])) {echo $_SESSION['formularioHojas']['(G15)GE93']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E93</td>                    
                                            <td> <label for="">&nbsp;&nbsp;PISOS CLIMÁTICOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G15)GE111" value="<?php if (isset($_SESSION['formularioHojas']['(G15)GE111'])) {echo $_SESSION['formularioHojas']['(G15)GE111']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E111 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;VOLCANES ACTIVOS DEL EC.</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">16.- MAPAS - BANDERAS </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">MONEDAS - DOLARIZACIÓN </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G16)G54" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G54'])) {echo $_SESSION['formularioHojas']['(G16)G54']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;54 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA AMÉR. - SUR - FÍSICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G55" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G55'])) {echo $_SESSION['formularioHojas']['(G16)G55']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;55 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA AMÉR. - SUR - POLÍTICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G56"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G56'])) {echo $_SESSION['formularioHojas']['(G16)G56']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;56 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA AMÉR. - NORTE - FÍSICOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G57"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G57'])) {echo $_SESSION['formularioHojas']['(G16)G57']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;57 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AMÉR. NOR. Y CENT. - POLÍTICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G58"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G58'])) {echo $_SESSION['formularioHojas']['(G16)G58']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;58 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA EUROPA - FÍSICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G59" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G59'])) {echo $_SESSION['formularioHojas']['(G16)G59']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;59 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA EUROPA - POLÍTICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G60" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G60'])) {echo $_SESSION['formularioHojas']['(G16)G60']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;60 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ASIA - FÍSICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G61" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G61'])) {echo $_SESSION['formularioHojas']['(G16)G61']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;61 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ASIA - POLÍTICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G62" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G62'])) {echo $_SESSION['formularioHojas']['(G16)G62']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;62 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ÁFRICA - FÍSICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G63" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G63'])) {echo $_SESSION['formularioHojas']['(G16)G63']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;63 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ÁFRICA - POLÍTICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G79"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G79'])) {echo $_SESSION['formularioHojas']['(G16)G79']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;79 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AMÉRICA FÍSICO COMPLETO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G80"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G80'])) {echo $_SESSION['formularioHojas']['(G16)G80']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;80 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AMÉRICA POLÍTICO COMPLETO</label> </td>
                                        </tr>

                                        <tr>
                                            <td> <input  type="number" name="(G16)G112" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G112'])) {echo $_SESSION['formularioHojas']['(G16)G112']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;112 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPAMUNDI - FÍSICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G166" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G166'])) {echo $_SESSION['formularioHojas']['(G16)G166']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;166 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERAS DE AMÉRICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G167" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G167'])) {echo $_SESSION['formularioHojas']['(G16)G167']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;167 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERAS DE EUROPA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G168" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G168'])) {echo $_SESSION['formularioHojas']['(G16)G168']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;168 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERAS DE ÁFRICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G169" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G169'])) {echo $_SESSION['formularioHojas']['(G16)G169']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;169 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERAS DE ASIA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G200" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G200'])) {echo $_SESSION['formularioHojas']['(G16)G200']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;200 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONEDAS DE AMÉRICA</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G201"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G201'])) {echo $_SESSION['formularioHojas']['(G16)G201']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;201 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONED.ASIA ÁFRICA OCEANÍA</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G202"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G202'])) {echo $_SESSION['formularioHojas']['(G16)G202']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;202 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONEDAS DE EUROPA</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G283" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G283'])) {echo $_SESSION['formularioHojas']['(G16)G283']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;283 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PLANISFERIO - POLÍTICO</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G289" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G289'])) {echo $_SESSION['formularioHojas']['(G16)G289']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;289 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;OCEANÍA-FÍSICOYPOLÍTICO</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G290" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G290'])) {echo $_SESSION['formularioHojas']['(G16)G290']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;290 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AMÉR.CENTR-FÍSICO Y POLÍ.</label> </td>
                                        </tr><tr>
                                            <td> <input  type="number" name="(G16)G300" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G300'])) {echo $_SESSION['formularioHojas']['(G16)G300']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;300 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓM.AMÉR.SUR</label> </td>
                                        </tr>



                                    </table>
                                </div>
                                <div class="col-sm-4">
                                    <table class="textI">

                                        <tr>
                                            <td> <input  type="number" name="(G16)G301" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G301'])) {echo $_SESSION['formularioHojas']['(G16)G301']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;301 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓM. AMÉR.NORTE</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G302" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G302'])) {echo $_SESSION['formularioHojas']['(G16)G302']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;302 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓMI. AMÉ.CENTR.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G303" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G303'])) {echo $_SESSION['formularioHojas']['(G16)G303']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;303 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓMICO - ÁFRICA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G304" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G304'])) {echo $_SESSION['formularioHojas']['(G16)G304']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;304 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓMICO - EUROPA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G305" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G305'])) {echo $_SESSION['formularioHojas']['(G16)G305']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;305 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓMICO - ÁSIA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G306" value="<?php if (isset($_SESSION['formularioHojas']['(G16)G306'])) {echo $_SESSION['formularioHojas']['(G16)G306']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;306 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ECONÓMICO - OCEANÍA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)G392"  value="<?php if (isset($_SESSION['formularioHojas']['(G16)G392'])) {echo $_SESSION['formularioHojas']['(G16)G392']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;392 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOS SEIS CONTINENTES</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE2" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE2'])) {echo $_SESSION['formularioHojas']['(G16)GE2']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E2 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA FÍSICO ECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE3" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE3'])) {echo $_SESSION['formularioHojas']['(G16)GE3']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E3 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA POLÍTICO ECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE11" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE11'])) {echo $_SESSION['formularioHojas']['(G16)GE11']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E11 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LA DOLARIZACIÓN</label> </td>
                                        </tr>                                         
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE65" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE65'])) {echo $_SESSION['formularioHojas']['(G16)GE65']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E65 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPAS TEMÁTICOS 1</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE66" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE66'])) {echo $_SESSION['formularioHojas']['(G16)GE66']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E66 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPAS TEMÁTICOS 2</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE72" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE72'])) {echo $_SESSION['formularioHojas']['(G16)GE72']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E72 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERA Y ESCUDO ECUADOR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE110" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE110'])) {echo $_SESSION['formularioHojas']['(G16)GE110']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E110 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BANDERAS Y ESCUDOS DE PICHIC</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE113" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE113'])) {echo $_SESSION['formularioHojas']['(G16)GE113']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E113 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA HIDROGRÁFICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE114" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE114'])) {echo $_SESSION['formularioHojas']['(G16)GE114']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E114 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA OROGRÁFICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE115" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE115'])) {echo $_SESSION['formularioHojas']['(G16)GE115']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E115 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA VIAL</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE117" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE117'])) {echo $_SESSION['formularioHojas']['(G16)GE117']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E117 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA TURÍSTICO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE130" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE130'])) {echo $_SESSION['formularioHojas']['(G16)GE130']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E130 </td>                   
                                            <td> <label for="">&nbsp;&nbsp;DIVISIÓN POLÍTICA COSTA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE131" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE131'])) {echo $_SESSION['formularioHojas']['(G16)GE131']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E131 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DIVISIÓN POLÍTICA SIERRA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE132" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE132'])) {echo $_SESSION['formularioHojas']['(G16)GE132']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E132 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;DIVISIÓN POLÍTICA ORIENTE</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G16)GE134" value="<?php if (isset($_SESSION['formularioHojas']['(G16)GE134'])) {echo $_SESSION['formularioHojas']['(G16)GE134']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E134 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAPA ETNOGRÁFICO ECUADOR</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">17.- COMPUTACION - </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">MAQUINARIA - HERRAMIENTAS </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        </tr>


                                        <tr>
                                            <td> <input  type="number" name="(G17)G47"  value="<?php if (isset($_SESSION['formularioHojas']['(G17)G47'])) {echo $_SESSION['formularioHojas']['(G17)G47']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;47 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;HERRAMIENTAS AGRÍCOLAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G48" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G48'])) {echo $_SESSION['formularioHojas']['(G17)G48']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;48 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAQUINARIA AGRÍCOLA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G64" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G64'])) {echo $_SESSION['formularioHojas']['(G17)G64']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;64 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;COMPONENTES DE LA COMPUT.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G84" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G84'])) {echo $_SESSION['formularioHojas']['(G17)G84']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;84 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;HERRAMIENTAS DE CARPINTE.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G91" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G91'])) {echo $_SESSION['formularioHojas']['(G17)G91']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;91 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MATERIALES DE CONSTRUCCI.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G99" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G99'])) {echo $_SESSION['formularioHojas']['(G17)G99']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;99 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;TECLADO DE LA COMPUTAD.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G163" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G163'])) {echo $_SESSION['formularioHojas']['(G17)G163']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;163 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;HERRAMIENTAS DE ELECTRICI.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G164" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G164'])) {echo $_SESSION['formularioHojas']['(G17)G164']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;164 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;HERRAMIENTAS DE PLOMERÍA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G182" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G182'])) {echo $_SESSION['formularioHojas']['(G17)G182']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;182 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERIFÉRICOS DE ALMACENAM.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G183" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G183'])) {echo $_SESSION['formularioHojas']['(G17)G183']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;183 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERIFÉRICOS DE ENTRADA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G188"  value="<?php if (isset($_SESSION['formularioHojas']['(G17)G188'])) {echo $_SESSION['formularioHojas']['(G17)G188']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;188 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PERIFÉRICOS DE SALIDA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G189" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G189'])) {echo $_SESSION['formularioHojas']['(G17)G189']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;189 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PARTES INTER. DE LA COMPU.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G191" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G191'])) {echo $_SESSION['formularioHojas']['(G17)G191']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;191 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;HERRAMIENTAS DE ALBAÑILE.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G248" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G248'])) {echo $_SESSION['formularioHojas']['(G17)G248']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;248 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;GENERACIÓN DE LAS COMPU.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G364"  value="<?php if (isset($_SESSION['formularioHojas']['(G17)G364'])) {echo $_SESSION['formularioHojas']['(G17)G364']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;364 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MAQUIN.SIMPLES Y COMPUES.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G430" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G430'])) {echo $_SESSION['formularioHojas']['(G17)G430']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;430 </td>                   
                                            <td> <label for="">&nbsp;&nbsp;ACCIDENTES DE TRABAJO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G431" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G431'])) {echo $_SESSION['formularioHojas']['(G17)G431']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;431 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL RELÓJ</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G473" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G473'])) {echo $_SESSION['formularioHojas']['(G17)G473']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;473 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PARTES DE LA COMPUTADORA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G480" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G480'])) {echo $_SESSION['formularioHojas']['(G17)G480']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;480 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ÍCONOS DE LA COMPUTADORA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G17)G495" value="<?php if (isset($_SESSION['formularioHojas']['(G17)G495'])) {echo $_SESSION['formularioHojas']['(G17)G495']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;495 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CLASIF TECLADO COMPUTADO 1</label> </td>
                                        </tr>


                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td colspan="3" class="textC negrita">18.- MONOGRAFÍAS DEL ECUADOR - </td>                    
                                            <td> </td>
                                        </tr>
                                        <tr>
                                            <td> </td>                    
                                            <td> &nbsp;&nbsp;</td>                    
                                            <td> </td>
                                        </tr>



                                        <tr>
                                            <td> <input  type="number" name="(G18)GE39" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE39'])) {echo $_SESSION['formularioHojas']['(G18)GE39']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E39 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;TUNGURAHUA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE40" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE40'])) {echo $_SESSION['formularioHojas']['(G18)GE40']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E40 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PICHINCHA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE41" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE41'])) {echo $_SESSION['formularioHojas']['(G18)GE41']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E41 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;GUAYAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE42"  value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE42'])) {echo $_SESSION['formularioHojas']['(G18)GE42']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E42 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MANABÍ</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE43" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE43'])) {echo $_SESSION['formularioHojas']['(G18)GE43']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E43 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;IMBABURA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE44"  value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE44'])) {echo $_SESSION['formularioHojas']['(G18)GE44']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E44 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;AZUAY</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE45" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE45'])) {echo $_SESSION['formularioHojas']['(G18)GE45']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E45 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOJA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE46"  value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE46'])) {echo $_SESSION['formularioHojas']['(G18)GE46']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E46 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;NAPO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE47" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE47'])) {echo $_SESSION['formularioHojas']['(G18)GE47']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E47 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ORELLANA</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE48" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE48'])) {echo $_SESSION['formularioHojas']['(G18)GE48']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E48 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;GALÁPAGOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE49" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE49'])) {echo $_SESSION['formularioHojas']['(G18)GE49']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E49 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;COTOPAXI</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE50" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE50'])) {echo $_SESSION['formularioHojas']['(G18)GE50']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E50 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;LOS RÍOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE51" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE51'])) {echo $_SESSION['formularioHojas']['(G18)GE51']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E51 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;EL ORO.</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE52" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE52'])) {echo $_SESSION['formularioHojas']['(G18)GE52']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E52 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ESMERALDAS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE53" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE53'])) {echo $_SESSION['formularioHojas']['(G18)GE53']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E53 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CARCHI</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE54" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE54'])) {echo $_SESSION['formularioHojas']['(G18)GE54']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E54 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;BOLÍVAR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE55" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE55'])) {echo $_SESSION['formularioHojas']['(G18)GE55']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E55 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CHIMBORAZO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE56" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE56'])) {echo $_SESSION['formularioHojas']['(G18)GE56']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E56 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;ZAMORA CHINCHIPE</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE57" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE57'])) {echo $_SESSION['formularioHojas']['(G18)GE57']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E57 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CAÑAR</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE58" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE58'])) {echo $_SESSION['formularioHojas']['(G18)GE58']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E58 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;PASTAZA</label> </td>
                                        </tr>                                          
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE59" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE59'])) {echo $_SESSION['formularioHojas']['(G18)GE59']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E59 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MORONA SANTIAGO</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE60" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE60'])) {echo $_SESSION['formularioHojas']['(G18)GE60']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E60 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SUCUMBÍOS</label> </td>
                                        </tr>
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE73" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE73'])) {echo $_SESSION['formularioHojas']['(G18)GE73']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E73 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CANTÓN QUITO</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE74" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE74'])) {echo $_SESSION['formularioHojas']['(G18)GE74']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E74 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;STO. DOM. DE LOS TSÁCHILASA</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE75" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE75'])) {echo $_SESSION['formularioHojas']['(G18)GE75']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E75 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;SANTA ELENA</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE102" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE102'])) {echo $_SESSION['formularioHojas']['(G18)GE102']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E102 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONOGRAFÍA DE LA SIERRA 1</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE103" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE103'])) {echo $_SESSION['formularioHojas']['(G18)GE103']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E103 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONOGRAFÍA DE LA SIERRA 2</label> </td>
                                        </tr> 
                                        <tr>
                                            <td> <input  type="number" name="(G18)GE104" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE104'])) {echo $_SESSION['formularioHojas']['(G18)GE104']; }?>" min="5" max="9999" step="5" > </td>                    
                                            <td> &nbsp;&nbsp;E104 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;MONOGRAFÍA DE LA COSTA 1</label> </td>
                                        </tr> 





                                    </table>
                                </div>


                            </div>







                        </div>

                    </div>







            </form>






        </div>
    </body>

</html>