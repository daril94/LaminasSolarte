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


            <div id="temp" >  

                <!-- margen superior -->


                <!-- Formulario que almacena todos los datos -->        
                <form method="post" name="" >

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <!-- Parte superior del formulario--> 
                                <div class="row">
                                    <div class="col-md-12">                                       
                                        <!--Gnera una linea naranja--> 
                                        <div class="lineOrange"> </div>
                                        <div class="lineOrangeTitle">
                                            <p class="alignV" style="font-size:13px; background-color: whitesmoke; color: #929497;"> 
                                                Por favor haga su pedido. No olvide seleccionar mínimo 5 UNIDADES por tema  
                                            </p>
                                        </div> 
                                        <!--Gnera una linea naranja--> 
                                        <div class="lineOrange"></div>
                                    </div>

                                </div>
                                <div class="row" style="background-color: whitesmoke; padding-top:10px; padding-bottom: 10px; margin: 0" >
                                    <!-- Se crean 3 tablas diferentes para crear el formulario --> 
                                    <div class="col-sm-4">          
                                        <table class="textI">                
                                            <tr>                                            
                                                <td colspan="3" class="negrita textC">&nbsp; 1.-ALIMENTOS-NUTRICIÓN-VITAMINAS</td>                   
                                            </tr>

                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp; </td>                    
                                                <td></td>

                                            <tr>
                                                <td> <input type="number" name="(G1)GC1" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)GC1'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)GC1'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp; C1 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PLATOS TÍPICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G41"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G41'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G41'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"   > </td>                    
                                                <td> &nbsp;&nbsp;41 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS ALIMENTOS Y LAS VITAMINAS</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G1)G98" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G98'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G98'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;98 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PIRÁMIDE ALIMENTICIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G214" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G214'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G214'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;214 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS ALIMENTOS (clasificación)</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G266" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G266'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G266'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;266 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FOOD PIRAMID</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G326"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G326'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G326'];
                                                    }
                                                    ?>"   min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;326 </td>                    
                                                <td> <label for=>&nbsp;&nbsp;CADENAS ALIMENTICIAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G327" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G327'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G327'];
                                                    }
                                                    ?>" min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;327 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA DESNUTRICIÓN </label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G328" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G328'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G328'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;328 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS CARBOHIDRATOS </label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G329"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G329'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G329'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;329 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS LÍPIDOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G330"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G330'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G330'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;330 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS PROTEÍNAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G331" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G331'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G331'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;331 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CANAL DE PANAMÁ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G332" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G332'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G332'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;332 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS VITAMINAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G333" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G333'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G333'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;333 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TIPOS DE VITAMINAS </label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G334" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G334'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G334'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;334 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA NUTRICIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G352"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G352'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G352'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;352 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS TRES COMIDAS</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G1)G448"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G448'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G448'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;448 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;COMIDA CHATARRA.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G490"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G490'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G490'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;490 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SABORES Y OLORES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G512"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G512'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G512'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;512 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ALIMENTOS ENERGÉTICOS</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G1)G513"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G513'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G513'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;513 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ALIMENTOS REGULADORES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G514"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G514'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G514'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;514 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ALIMENTOS CONSTRUCTORES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G515" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G515'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G515'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;515 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ALIM.ORIGEN ANIM-VEGET-MINER.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)G516"value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)G516'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)G516'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;516 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;HIGIENE DE LA ALIMENTACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)GE31" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)GE31'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)GE31'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E31 </td>                    
                                                <td> <label for="">&nbsp;&nbsp; COMIDA TÍPICA DE LA COSTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)GE32"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)GE32'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)GE32'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E32 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;COMIDA TÍPICA DE LA SIERRA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G1)GE33"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G1)GE33'])) {
                                                        echo $_SESSION['formularioHojas']['(G1)GE33'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E33 </td>                    
                                                <td> <label for="">&nbsp;&nbsp; COMIDATÍPICA ORIENTE Y GALÁ.</label> </td>
                                            </tr> 
                                            <tr>
                                                <td>&nbsp;&nbsp;</td>                    
                                                <td>&nbsp;&nbsp; </td>    
                                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>  
                                            </tr>
                                            <tr>

                                                <td colspan="3" class="textC negrita"> 2  ANIMALES - FAUNA </td>                    

                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>    
                                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </td>  
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD1" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD1'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD1'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D1 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES SILVESTRES</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)GD2" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD2'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD2'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D2 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES PREHISTORICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD3" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD3'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD3'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D3 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES DE LA GRANJA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD4" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD4'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD4'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D4 </td>                    
                                                <td> <label for="LaminaSP31">&nbsp;&nbsp;4 CLASIFIC. DE LOS ANIMALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD5" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD5'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD5'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D5 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASIFIC. ANIMALES SALVAJES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD6" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD6'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD6'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D6 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LENGUAJE ANIMAL.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD7" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD7'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD7'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D7 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PECES AG.DULCE Y AG. SALADA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD8" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD8'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD8'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D8 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASIFIC. DE LOS ROEDORES</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)GD9"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD9'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD9'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;D9 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASIFIC. DE LAS MARIPOSAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD10" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD10'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD10'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;D10 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANFIBIOS Y SU CLASIFICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD11"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD11'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD11'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"   > </td>                    
                                                <td> &nbsp;&nbsp;D11 </td>                    
                                                <td> <label for="b">&nbsp;&nbsp; REPTILES Y SU CLASIFICACIÓN</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)GD12" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD12'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD12'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;D12 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FAUNA DE AMÉRICA.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GD13" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GD13'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GD13'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;D13 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES CARROÑEROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G9"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G9'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G9'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                 
                                                <td> &nbsp;&nbsp;9 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES SALVAJES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G10" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G10'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G10'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td> 
                                                <td> &nbsp;&nbsp;10 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES DOMÉSTICOS Nº1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G11" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G11'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G11'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;11 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES VERTEBRADOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G12" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G12'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G12'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;12 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES INVERTEBRADOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G25" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G25'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G25'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;25 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS AVES</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)G27" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G27'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G27'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>             
                                                <td> &nbsp;&nbsp;27 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS PECES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G28" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G28'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G28'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;28 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANFIBIOS Y REPTILES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G65" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G65'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G65'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                
                                                <td> &nbsp;&nbsp;65 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS INSECTOS.</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)G66" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G66'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G66'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;66 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS CRUSTÁCEOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G67" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G67'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G67'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>       
                                                <td> &nbsp;&nbsp;67 </td>                    
                                                <td> <label for="LaminaSP50">&nbsp;&nbsp;LOS MAMÍFEROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G68"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G68'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G68'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>     
                                                <td> &nbsp;&nbsp;68 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS ARÁCNIDOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G71"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G71'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G71'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;71 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES ÚTILES </label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G72"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G72'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G72'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;72 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES PERJUDICIALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G96" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G96'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G96'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                
                                                <td> &nbsp;&nbsp;96 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;OVÍPAROS Y VIVÍPAROS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G97" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G97'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G97'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>        
                                                <td> &nbsp;&nbsp;97 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CARNÍV. HERBÍV. Y OMNÍV.</label> </td>
                                            </tr> 
                                            <tr>
                                                <td> <input  type="number" name="(G2)G130" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G130'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G130'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>       
                                                <td> &nbsp;&nbsp;130 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES DOMÉSTICOS 2 .</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G156" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G156'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G156'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>             
                                                <td> &nbsp;&nbsp;156 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES COMESTIBLES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G184" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G184'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G184'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;184 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;VACA Y SUS DERIVADOS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G206" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G206'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G206'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;206 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CERDO Y SUS DERIVADOS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G207" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G207'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G207'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;207 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CABALLO Y SUS DERIVADOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G265" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G265'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G265'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                     
                                                <td> &nbsp;&nbsp;265 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PETS - FARMS ANIMALS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G268" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G268'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G268'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;268 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DISECC. DE LA RANA Y LAGARTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G269" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G269'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G269'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;269 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DISECC. PALOMA Y CONEJO</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)G279" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G279'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G279'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;279 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MAMÍFEROS MARINOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G280" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G280'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G280'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>            
                                                <td> &nbsp;&nbsp;280 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES CARNÍVOROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G281" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G281'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G281'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                     
                                                <td> &nbsp;&nbsp;281 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES HERVÍBOROS.</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)G282"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G282'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G282'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>             
                                                <td> &nbsp;&nbsp;282 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES OMNÍVOROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G297" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G297'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G297'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;297 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DISTRIBUCIÓN DE LA FAUNA</label> </td>
                                            </tr>



                                        </table>

                                    </div>

                                    <div class="col-sm-4">             

                                        <table  class="textI">                                    

                                            <tr>
                                                <td> <input  type="number" name="(G2)G307" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G307'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G307'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;307 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIM. EXTINCIÓN DEL MUNDO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G335" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G335'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G335'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>          
                                                <td> &nbsp;&nbsp;335 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ESPONJAS CLASIFICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G336" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G336'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G336'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;336 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS CELENTÉREOS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G339" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G339'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G339'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                 
                                                <td> &nbsp;&nbsp;339 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS ARTRÓPODOS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G345" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G345'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G345'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;345 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;5 PLATELMINTOS Y NEMÁTODOS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G346" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G346'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G346'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;346 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS EQUINODERMOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G347" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G347'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G347'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                
                                                <td> &nbsp;&nbsp;347 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TIPOS DE GANADO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G363" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G363'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G363'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;363 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASIFIC. DEL REINO ANIMAL</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)G379"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G379'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G379'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;379</td>                    
                                                <td> <label for="LaminaSP77">&nbsp;&nbsp;INSECTOS PERJUDIC. AGRICUL.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G388"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G388'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G388'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                     
                                                <td> &nbsp;&nbsp;388 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;GUSANOS CLASIFICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G482" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G482'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G482'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                     
                                                <td> &nbsp;&nbsp;482 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES SILVESTRES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)G510" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)G510'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)G510'];
                                                    }
                                                    ?>"   min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;510 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIMALES INSECTÍVOROS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GE22" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GE22'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GE22'];
                                                    }
                                                    ?>"  min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E22 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANIM. EN EXTINCIÓN ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GE23" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GE23'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GE23'];
                                                    }
                                                    ?>"   min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E23 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FAUNA DE LA COSTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GE24"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GE24'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GE24'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;E24 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FAUNA DE LA SIERRA</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G2)GE25" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GE25'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GE25'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E25 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FAUNA DEL ORIENTE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G2)GE26" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G2)GE26'])) {
                                                        echo $_SESSION['formularioHojas']['(G2)GE26'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E26 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FAUNA DE GALÁPAGOS</label> </td>
                                            </tr>


                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>     
                                                <td>  </td> 
                                            </tr>

                                            <tr>                                                      
                                                <td colspan="3" class="negrita textC">3.- COMUNICACIÓN - MEDIOS DE </td>                    

                                            </tr>
                                            <tr>

                                                <td colspan="3" class="negrita textC">TRANSPORTE - LENGUAJE </td>                    

                                            </tr>
                                            <tr>

                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                            </tr>

                                            <td> <input  type="number" name="(G3)GF1" value="<?php
                                                if (isset($_SESSION['formularioHojas']['(G3)GF1'])) {
                                                    echo $_SESSION['formularioHojas']['(G3)GF1'];
                                                }
                                                ?>" min="5" max="9999" step="5"  > </td>                    
                                            <td> &nbsp;&nbsp;F1 </td>                    
                                            <td> <label for="">&nbsp;&nbsp;CLASES MEDIOS COMUNICAC.</label> </td>
                                            </tr>                                        

                                            <tr>
                                                <td> <input  type="number" name="(G3)G15" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G15'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G15'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;15 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MEDIOS DE TRANSPORTE</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G3)G21"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G21'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G21'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;21 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS COMUNICACIONES</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G3)G117" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G117'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G117'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;117 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRANSPORTES AÉREOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G118" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G118'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G118'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;118 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRANSPORTES MARÍTIMOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G119" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G119'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G119'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;119 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRANSPORTES TERRESTRES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G241" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G241'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G241'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;241 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SEÑALES DE TRÁNSITO 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G242" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G242'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G242'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;242 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SEÑALES DE TRÁNSITO 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G277" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G277'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G277'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;277 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FORMAS DE LENGUAJE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G310" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G310'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G310'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;310 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRANSPORTES MODERNOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G313" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G313'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G313'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;313 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;VIAS DE COMUNICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G3)G351" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G351'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G351'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;351 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MEDIOS COMUNIC. MODERN.</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G3)G484"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G3)G484'])) {
                                                        echo $_SESSION['formularioHojas']['(G3)G484'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;484 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EDUCACIÓN VIAL</label> </td>
                                            </tr> 
                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>

                                            <tr>

                                                <td colspan="3" class="negrita textC">4.- COSTUMBRES - CIVICA </td>                    

                                            </tr>
                                            <tr>
                                                <td> 
                                                </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                            <tr>
                                                <td> <input  type="number" name="(G4)Gg5" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)Gg5'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)Gg5'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;G5 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA DEMOCRACIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G197"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G197'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G197'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;197 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRAJES AMER. NORTESUR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G198"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G198'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G198'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;198 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRAJES AMER. CENTRAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G233" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G233'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G233'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;233 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MOTIVOS NAVIDEÑOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G234"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G234'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G234'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;234 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MOTIVOS NAVIDEÑOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G235" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G235'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G235'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;235 </td>                    
                                                <td> <label for="LaminaSG18">&nbsp;&nbsp;MOTIVOS NAVIDEÑOS 3</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G236" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G236'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G236'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;236 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CANC. DE NAVIDAD 1 ESPAÑOL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G237" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G237'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G237'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;237 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CANC. DE NAVIDAD 2 INGLÉS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)G243" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G243'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G243'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;243 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FECHAS IMPORTANT. MUNDO</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G4)G401" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)G401'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)G401'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;401 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CANCIONES NAVIDEÑAS 2</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE1" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE1'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE1'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E1 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SÍMBOLOS PATRIOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE21" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE21'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE21'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E21 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TRAJES TÍPICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE37" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE37'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE37'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E37 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BANDERA Y ESCUD. DEL ECUA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE38" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE38'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE38'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E38 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SÍMBOLOS CIUDAD DE QUITO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE69"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE69'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE69'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E69 </td>                    
                                                <td> <label for="LaminaSG27">&nbsp;&nbsp;DIA DE LA MADRE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE70" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE70'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE70'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E70 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DIA BANDERA Y ESCUDO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE71" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE71'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE71'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E71 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;HIMNOS CIVICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE94" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE94'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE94'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E94 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DIA DEL MAESTRO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE95"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE95'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE95'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E95 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BATALLA PICHINCHA</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE96"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE96'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE96'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E96 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FOLKLOR - SIERRA</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE97"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE97'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE97'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E97 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FOLKLOR - COSTA</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE98" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE98'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE98'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E98 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FOLKLOR - ORIENTE</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE99" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE99'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE99'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E99 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;INDEPENDENCIA DE CUENCA</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE100" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE100'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE100'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E100 </td>                    
                                                <td> <label for="LaminaSG30">&nbsp;&nbsp;FIESTAS DEL ECUADOR 1</label> </td>
                                            </tr> 
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE101" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE101'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE101'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E101 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FIESTAS DEL ECUADOR 2</label> </td>
                                            </tr> 
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE112" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE112'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE112'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E112 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FUNDACIÓN DE QUITO</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE116" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE116'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE116'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E116 </td>                    
                                                <td> <label >&nbsp;&nbsp;BATALLA DE TARQUI</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE118" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE118'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE118'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E118 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;FUNCION DEL ESTADO</label> </td>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE128"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE128'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE128'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E128 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BANDERA NACIONAL ECUADOR</label> </td>
                                            </tr>
                                            </tr>  
                                            <tr>
                                                <td> <input  type="number" name="(G4)GE129" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G4)GE129'])) {
                                                        echo $_SESSION['formularioHojas']['(G4)GE129'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E129 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ESCUDO NACIONAL ECUADOR</label> </td>
                                            </tr>


                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>

                                            <tr>

                                                <td colspan="3" class="negrita textC">5.- CUERPO HUMANO - CÉLULAS </td>                    

                                            </tr>
                                            <tr>

                                                <td colspan="3" class="negrita textC">TEJIDOS - SISTEMAS </td>                    

                                            </tr>
                                            <tr>

                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>
                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>
                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>



                                        </table>
                                    </div>
                                    <div class="col-sm-4">           

                                        <table class="textI">

                                            <tr>
                                                <td> <input  type="number" name="(G5)G29" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G29'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G29'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;29 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA DIGESTIVO</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G5)G30"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G30'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G30'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;30 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA CIRCULATORIO</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G5)G31" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G31'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G31'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;31 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA RESPIRATORIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G32" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G32'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G32'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;32 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA ÓSEO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G33" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G33'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G33'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;33 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA MUSCULAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G34"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G34'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G34'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;34 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS 5 SENTIDOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G40"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G40'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G40'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;40 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL CUERPO HUMANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G52" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G52'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G52'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;52 </td>                    
                                                <td> <label for="LaminaSG38">&nbsp;&nbsp;LA SEXUALIDAD</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G81" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G81'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G81'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;81 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;APARATO URINARIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G82"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G82'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G82'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;82 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA NERVIOSO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G83"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G83'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G83'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;83 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA EXCRETOR</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G5)G87" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G87'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G87'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;87 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CICLO VITAL - SERES VIVOS</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G5)G113" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G113'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G113'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;113 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA CÉLULA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G115" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G115'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G115'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;115 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA REPR0D.MASCULINO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G116" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G116'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G116'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;116 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA REPROD. FEMENINO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G120" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G120'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G120'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;120 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;APARATO REPROD. MASCULINO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G121" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G121'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G121'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;121 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;APARATO REPROD. FEMENINO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G122"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G122'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G122'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;122 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SENTIDO DE LA VISIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G123" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G123'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G123'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;123 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SENTIDO DE LA AUDICIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G124"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G124'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G124'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;124 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SENTIDO DEL OLFATO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G125"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G125'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G125'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;125 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SENTIDO DEL GUSTO</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G5)G126" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G126'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G126'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;126 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SENTIDO DEL TACTO</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G5)G127" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G127'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G127'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;127 </td>                    
                                                <td> <label for="LaminaSG53">&nbsp;&nbsp;LOS 5 SENTIDOS Nº2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G128" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G128'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G128'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;128 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPO HUMANO Nº2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G157"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G157'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G157'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;157</td>                    
                                                <td> <label for="">&nbsp;&nbsp;SERES VIVOS E INERTES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G159"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G159'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G159'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;159 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;HUESOS DE LA CABEZA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G187" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G187'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G187'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;187 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA CÉLULA (GRANDE)</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G213"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G213'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G213'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;213 </td>                    
                                                <td> <label for="LaminaSG58">&nbsp;&nbsp;LA FECUNDACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G218" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G218'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G218'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;218 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL EMBARAZO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G219" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G219'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G219'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;219 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL PARTO Y LA LACTANCIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G231" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G231'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G231'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;231 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA ENDRÓCRINO</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G5)G259"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G259'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G259'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;259 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;HUMAN BODY - CUER. HUMA.</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G5)G270" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G270'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G270'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;270 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;TEJIDOS ANIMALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G271"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G271'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G271'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;271 </td>                    
                                                <td> <label for="LaminaSG64">&nbsp;&nbsp;TEJIDOS VEGETALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G293"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G293'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G293'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;293 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;6 SIST. DEL CUERPO HUMANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G294"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G294'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G294'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;294 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL ESQUELETO HUMANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G299"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G299'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G299'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;299 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA MENSTRUACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G317" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G317'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G317'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;317 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DESARROLLO HUMANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G318" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G318'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G318'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;318 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS DIENTES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G319"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G319'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G319'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;319 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA LINFÁTICO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G357"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G357'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G357'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;357 </td>                    
                                                <td> <label for="LaminaSG71">&nbsp;&nbsp;REPRODUCCIÓN ASEXUAL</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G5)G358"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G358'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G358'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;358 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;REPRODUCCIÓN SEXUAL</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G5)G365" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G365'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G365'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;365 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS ORGANOS CUERP. HUMANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G393" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G393'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G393'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;393 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL ADN Y ARN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G395"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G395'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G395'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;395 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS ARTICULACIONES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G396"  value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G396'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G396'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;396 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA SANGRE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G5)G509" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G5)G509'])) {
                                                        echo $_SESSION['formularioHojas']['(G5)G509'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;509 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SISTEMA LOCOMOTOR</label> </td>
                                            </tr>


                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>

                                            <tr>                                                    
                                                <td colspan="3" class="negrita textC">6.- CULTURAS - RAZAS - GRUPOS </td>                  
                                            <tr>

                                            <tr>
                                                <td>  </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>


                                            <tr>
                                                <td> <input  type="number" name="(G6)G1" id="LaminaSG78" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G1'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G1'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;1 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA AZTECA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G2" id="LaminaSG79" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G2'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G2'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;2 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA INCA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G3" id="LaminaS80" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G3'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G3'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;3 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA MAYA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G4" id="LaminaSG81" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G4'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G4'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;4 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA EGIPCIA</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G6)G170" id="LaminaSG82" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G170'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G170'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;170 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA CHINA 1</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G6)G171" id="LaminaSG83" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G171'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G171'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;171 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA CHINA 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G172" id="LaminaSG84" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G172'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G172'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;172 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA INDIA 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G173" id="LaminaSG85" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G173'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G173'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;173 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA INDIA 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G174" id="LaminaSG86" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G174'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G174'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;174 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS MINERALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G175" id="LaminaSG87" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G175'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G175'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;175 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA MESOPOTÁMICA 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G176" id="LaminaSG88" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G176'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G176'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;176 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA GRIEGA 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G177" id="LaminaSG89" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G177'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G177'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;177 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA GRIEGA 3</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G178" id="LaminaS90" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G178'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G178'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;178 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA FENICIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G179" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G179'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G179'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;179 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA GRIEGA - ATENAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G185" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G185'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G185'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;185 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CIVILIZACIÓN PERSA - ATENAS</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G186" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G186'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G186'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;186 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CIVILIZACIÓN HEBREA</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G353" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G353'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G353'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;353 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA ROMANA 1</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G354" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G354'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G354'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;354 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA ROMANA 2</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G355" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G355'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G355'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;355 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA GRIEGA 2</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G389" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G389'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G389'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;389 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;RAZAS DEL MUNDO</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G6)G432" id="LaminaS91" value="<?php
                                                    if (isset($_SESSION['formularioHojas']['(G6)G432'])) {
                                                        echo $_SESSION['formularioHojas']['(G6)G432'];
                                                    }
                                                    ?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;432 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA SUMERIA</label> </td>
                                            </tr>
                                        </table>
                                    </div>

                                </div>












                            </div>

                        </div>          

                </form>

                <div id="valor"></div>






            </div>

    </body>

</html>