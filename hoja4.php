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
        <link href="css/stylesEcu.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>   

        <!-- Este div llamado padre, simplemente tiene un ancho y alto del 100% -->
        <div id="padre">    
            <div id="temp" >  

                <!-- margen superior -->
                <!-- Formulario que almacena todos los datos -->        
                <form method="post" name="">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <!-- Parte superior del formulario--> 
                                <div class="row">
                                    <div class="col-md-12">                                       
                                        <div class="lineOrangeTitle" style="background-color: black; color: white">
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
                                                <td> <input  type="number" name="(G18)GE105" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE105'])) {echo $_SESSION['formularioHojas']['(G18)GE105']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E105 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOGRAFÍA DE LA COSTA 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE106" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE106'])) {echo $_SESSION['formularioHojas']['(G18)GE106']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E106 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOGRAFÍA DEL ORIENTE 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE107" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE107'])) {echo $_SESSION['formularioHojas']['(G18)GE107']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E107 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOGRAFÍA DEL ORIENTE 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE108" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE108'])) {echo $_SESSION['formularioHojas']['(G18)GE108']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E108 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOGRA. DE GALÁPAGOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE109" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE109'])) {echo $_SESSION['formularioHojas']['(G18)GE109']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E109 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOGRA. DE GALÁPAGOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE119" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE119'])) {echo $_SESSION['formularioHojas']['(G18)GE119']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E119 </td>                   
                                                <td> <label >&nbsp;&nbsp;LUGARES TURÍST. ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE120" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE120'])) {echo $_SESSION['formularioHojas']['(G18)GE120']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E120 </td>                    
                                                <td> <label >&nbsp;&nbsp;PRIN.IGLESIAS DEL ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE121" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE121'])) {echo $_SESSION['formularioHojas']['(G18)GE121']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E121 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN RUMIÑAHUI</label> </td>
                                            </tr>
                                            <tr>                           
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE122" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE122'])) {echo $_SESSION['formularioHojas']['(G18)GE122']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E122 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN MEJÍA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE123" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE123'])) {echo $_SESSION['formularioHojas']['(G18)GE123']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E123 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN S.MIGUEL BANCOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE124" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE124'])) {echo $_SESSION['formularioHojas']['(G18)GE124']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E124 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN PUERTO QUITO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE125" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE125'])) {echo $_SESSION['formularioHojas']['(G18)GE125']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E125 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANT. PEDRO VICENTE MALD.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE126" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE126'])) {echo $_SESSION['formularioHojas']['(G18)GE126']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E126 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN PEDRO MONCAYO.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G18)GE127" value="<?php if (isset($_SESSION['formularioHojas']['(G18)GE127'])) {echo $_SESSION['formularioHojas']['(G18)GE127']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E127 </td>                    
                                                <td> <label >&nbsp;&nbsp;CANTÓN S. PEDRO CAYAMBE.</label> </td>
                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>                    
                                                <td></td>
                                            </tr>
                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> 19.- PLANTAS - FLORA - PRODUCTOS </td>                    
                                            </tr>
                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> FRUTAS </td>                    
                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>                    
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT1" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT1'])) {echo $_SESSION['formularioHojas']['(G19)GT1']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T1 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS ÚTILES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT2" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT2'])) {echo $_SESSION['formularioHojas']['(G19)GT2']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T2 </td>                    
                                                <td> <label >&nbsp;&nbsp;PRODUCTOS DE EXPORTAC.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT3" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT3'])) {echo $_SESSION['formularioHojas']['(G19)GT3']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T3 </td>                    
                                                <td> <label >&nbsp;&nbsp;ALIMENTA DE LAS PLANTAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT4" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT4'])) {echo $_SESSION['formularioHojas']['(G19)GT4']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T4 </td>                    
                                                <td> <label >&nbsp;&nbsp;CLASIFICA. DE LAS MADERAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT5" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT5'])) {echo $_SESSION['formularioHojas']['(G19)GT5']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T5 </td>                    
                                                <td> <label >&nbsp;&nbsp;LA GERMINACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT6" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT6'])) {echo $_SESSION['formularioHojas']['(G19)GT6']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T6</td>                    
                                                <td> <label >&nbsp;&nbsp;FLORA DE AMÉRICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT7" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT7'])) {echo $_SESSION['formularioHojas']['(G19)GT7']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T7 </td>                    
                                                <td> <label >&nbsp;&nbsp;BOSQUES DEL ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GT9" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GT9'])) {echo $_SESSION['formularioHojas']['(G19)GT9']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;T9 </td>                    
                                                <td> <label >&nbsp;&nbsp;BIOMA MANGLAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G5" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G5'])) {echo $_SESSION['formularioHojas']['(G19)G5']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;5 </td>                    
                                                <td> <label >&nbsp;&nbsp;CRIPTÓGAMAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G6" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G6'])) {echo $_SESSION['formularioHojas']['(G19)G6']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;6 </td>                    
                                                <td> <label >&nbsp;&nbsp;FANERÓGAMAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G7" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G7'])) {echo $_SESSION['formularioHojas']['(G19)G7']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;7 </td>                    
                                                <td> <label >&nbsp;&nbsp;MEDICINALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G8" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G8'])) {echo $_SESSION['formularioHojas']['(G19)G8']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;8 </td>                    
                                                <td> <label >&nbsp;&nbsp;INDUSTRIALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G26" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G26'])) {echo $_SESSION['formularioHojas']['(G19)G26']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;26 </td>                    
                                                <td> <label >&nbsp;&nbsp;LOS CEREALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G37" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G37'])) {echo $_SESSION['formularioHojas']['(G19)G37']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;37 </td>                    
                                                <td> <label >&nbsp;&nbsp;LAS FRUTAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G38" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G38'])) {echo $_SESSION['formularioHojas']['(G19)G38']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;38 </td>                    
                                                <td> <label >&nbsp;&nbsp;LAS HORTALIZAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G39" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G39'])) {echo $_SESSION['formularioHojas']['(G19)G39']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;39 </td>                    
                                                <td> <label >&nbsp;&nbsp;LAS LEGUMBRES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G42" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G42'])) {echo $_SESSION['formularioHojas']['(G19)G42']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;42 </td>                    
                                                <td> <label >&nbsp;&nbsp;LA RAÍZ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G73" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G73'])) {echo $_SESSION['formularioHojas']['(G19)G73']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;73 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS ORNAMENTALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G75" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G75'])) {echo $_SESSION['formularioHojas']['(G19)G75']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;75 </td>                    
                                                <td> <label >&nbsp;&nbsp;EL TALLO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G76" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G76'])) {echo $_SESSION['formularioHojas']['(G19)G76']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;76 </td>                    
                                                <td> <label >&nbsp;&nbsp;LA HOJA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G77" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G77'])) {echo $_SESSION['formularioHojas']['(G19)G77']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;77 </td>                    
                                                <td> <label >&nbsp;&nbsp;ANGIOSPERMAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G78" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G78'])) {echo $_SESSION['formularioHojas']['(G19)G78']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;78 </td>                    
                                                <td> <label >&nbsp;&nbsp;GIMNOSPERMAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G92" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G92'])) {echo $_SESSION['formularioHojas']['(G19)G92']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;92 </td>                    
                                                <td> <label >&nbsp;&nbsp;MADERAS - CLASIFICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G129" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G129'])) {echo $_SESSION['formularioHojas']['(G19)G129']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;129</td>                    
                                                <td> <label >&nbsp;&nbsp;PARTES DE LA PLANTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G158" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G158'])) {echo $_SESSION['formularioHojas']['(G19)G158']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;158 </td>                    
                                                <td> <label >&nbsp;&nbsp;LAS FRUTAS 2</label> </td>
                                            </tr>                                     
                                            <tr>
                                                <td> <input  type="number" name="(G19)G160" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G160'])) {echo $_SESSION['formularioHojas']['(G19)G160']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;160 </td>                    
                                                <td> <label >&nbsp;&nbsp;LAS FLORES 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G199" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G199'])) {echo $_SESSION['formularioHojas']['(G19)G199']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;199 </td>                    
                                                <td> <label >&nbsp;&nbsp;LA FLOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G205" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G205'])) {echo $_SESSION['formularioHojas']['(G19)G205']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;205 </td>                    
                                                <td> <label >&nbsp;&nbsp;EL FRUTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G215" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G215'])) {echo $_SESSION['formularioHojas']['(G19)G215']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;215 </td>                    
                                                <td> <label >&nbsp;&nbsp;LA SEMILLA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G223" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G223'])) {echo $_SESSION['formularioHojas']['(G19)G223']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;223 </td>                    
                                                <td> <label >&nbsp;&nbsp;HELECHOS - MUSGOS - ALGAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G224" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G224'])) {echo $_SESSION['formularioHojas']['(G19)G224']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;224</td>                    
                                                <td> <label >&nbsp;&nbsp;REINOS DE LA NATURALEZA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G244" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G244'])) {echo $_SESSION['formularioHojas']['(G19)G244']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;244</td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS ALIMENTICIAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G264" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G264'])) {echo $_SESSION['formularioHojas']['(G19)G264']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;264</td>                    
                                                <td> <label >&nbsp;&nbsp;FRUITS AND VEGETABLES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G272" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G272'])) {echo $_SESSION['formularioHojas']['(G19)G272']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;272 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS TERRESTRES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G273" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G273'])) {echo $_SESSION['formularioHojas']['(G19)G273']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;273</td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS TREPADORAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G274" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G274'])) {echo $_SESSION['formularioHojas']['(G19)G274']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;274 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS AÉREAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G275" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G275'])) {echo $_SESSION['formularioHojas']['(G19)G275']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;275 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS ACUÁTICAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G286" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G286'])) {echo $_SESSION['formularioHojas']['(G19)G286']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;286 </td>                    
                                                <td> <label >&nbsp;&nbsp;MONOCOTILEDÓNEAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G287" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G287'])) {echo $_SESSION['formularioHojas']['(G19)G287']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;287 </td>                    
                                                <td> <label >&nbsp;&nbsp;DICOTILEDÓNEAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G298" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G298'])) {echo $_SESSION['formularioHojas']['(G19)G298']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;298</td>                    
                                                <td> <label >&nbsp;&nbsp;DISTRIBUCIÓN DE LA FLORA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G311" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G311'])) {echo $_SESSION['formularioHojas']['(G19)G311']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;311 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANT. DE INTERIOR DE HOJA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G312" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G312'])) {echo $_SESSION['formularioHojas']['(G19)G312']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;312</td>                    
                                                <td> <label >&nbsp;&nbsp;PLANT. DE INTERIOR DE FLOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G361" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G361'])) {echo $_SESSION['formularioHojas']['(G19)G361']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;361 </td>                    
                                                <td> <label >&nbsp;&nbsp;CLASIFICAC. DE LAS PLANTAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G362" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G362'])) {echo $_SESSION['formularioHojas']['(G19)G362']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;362 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS POR SU UTILIDAD</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G377" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G377'])) {echo $_SESSION['formularioHojas']['(G19)G377']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;377 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS VENENOSAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)G378" value="<?php if (isset($_SESSION['formularioHojas']['(G19)G378'])) {echo $_SESSION['formularioHojas']['(G19)G378']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;378 </td>                    
                                                <td> <label >&nbsp;&nbsp;PLANTAS AROMÁTICAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GE27" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE27'])) {echo $_SESSION['formularioHojas']['(G19)GE27']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E27 </td>                    
                                                <td> <label >&nbsp;&nbsp;FLORA DE LA SIERRA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GE28" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE28'])) {echo $_SESSION['formularioHojas']['(G19)GE28']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E28 </td>                    
                                                <td> <label >&nbsp;&nbsp;FLORA DE LA COSTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GE29" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE29'])) {echo $_SESSION['formularioHojas']['(G19)GE29']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E29 </td>                    
                                                <td> <label >&nbsp;&nbsp;FLORA DEL ORIENTE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GE30" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE30'])) {echo $_SESSION['formularioHojas']['(G19)GE30']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E30 </td>                    
                                                <td> <label >&nbsp;&nbsp;FLORA DE GALÁPAGOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G19)GE63" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE63'])) {echo $_SESSION['formularioHojas']['(G19)GE63']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E63</td>                    
                                                <td> <label >&nbsp;&nbsp;FRUTAS DEL ECUADOR</label> </td>
                                            </tr>  <tr>
                                                <td> <input  type="number" name="(G19)GE64" value="<?php if (isset($_SESSION['formularioHojas']['(G19)GE64'])) {echo $_SESSION['formularioHojas']['(G19)GE64']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E64 </td>                    
                                                <td> <label >&nbsp;&nbsp;PROD. AGRÍCOLAS DEL ECUAD.</label> </td>
                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>    
                                                <td></td>
                                            </tr>
                                            <tr>                                                         
                                                <td colspan="3" class="textC negrita"> 20.- LA RELIGIÓN</td>                  
                                            </tr>
                                            <td></td>                    
                                            <td> &nbsp;&nbsp; </td>                    
                                            <td> </td>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G17" value="<?php if (isset($_SESSION['formularioHojas']['(G20)G17'])) {echo $_SESSION['formularioHojas']['(G20)G17']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;17 </td>                    
                                                <td> <label >&nbsp;&nbsp;VIDA DE JESÚS - SU NIÑÉZ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G18" value="<?php if (isset($_SESSION['formularioHojas']['(G20)G18'])) {echo $_SESSION['formularioHojas']['(G20)G18']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;18 </td>                    
                                                <td> <label >&nbsp;&nbsp;VIDA DE JESÚS - MILAGROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G19" value="<?php if (isset($_SESSION['formularioHojas']['(G20)G19'])) {echo $_SESSION['formularioHojas']['(G20)G19']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;19 </td>                    
                                                <td> <label >&nbsp;&nbsp;VIDA DE JESÚS - LA PASIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G20" value="<?php if (isset($_SESSION['formularioHojas']['(G20)G20'])) {echo $_SESSION['formularioHojas']['(G20)G20']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;20 </td>                    
                                                <td> <label >&nbsp;&nbsp;VIDA DE JESÚS - SU MUERTE</label> </td>
                                            </tr>

                                        </table>

                                    </div>

                                    <div class="col-sm-4" >          
                                        <table class="textI"> 
                                            <tr>
                                                <td> <input  type="number" name="(G20)G100"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G100'])) {echo $_SESSION['formularioHojas']['(G20)G100']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;100</td>                    
                                                <td> <label >&nbsp;&nbsp;LOS SIETE SACRAMENTOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G208"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G208'])) {echo $_SESSION['formularioHojas']['(G20)G208']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;208</td>                    
                                                <td> <label >&nbsp;&nbsp;LOS DIEZ MANDAMIENTOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G249"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G249'])) {echo $_SESSION['formularioHojas']['(G20)G249']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;249</td>                    
                                                <td> <label >&nbsp;&nbsp;LA CREACIÓN DEL MUNDO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G320"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G320'])) {echo $_SESSION['formularioHojas']['(G20)G320']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;320</td>                    
                                                <td> <label >&nbsp;&nbsp;EL VIACRÚCIS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G382"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G382'])) {echo $_SESSION['formularioHojas']['(G20)G382']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;382</td>                    
                                                <td> <label >&nbsp;&nbsp;PARÁBOLAS DE JESÚS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G383"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G383'])) {echo $_SESSION['formularioHojas']['(G20)G383']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;383</td>                    
                                                <td> <label >&nbsp;&nbsp;PARÁBOLAS DE JESÚS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G384"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G384'])) {echo $_SESSION['formularioHojas']['(G20)G384']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;384</td>                    
                                                <td> <label >&nbsp;&nbsp;LOS DOCE APÓSTOLES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G385"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G385'])) {echo $_SESSION['formularioHojas']['(G20)G385']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;385</td>                    
                                                <td> <label >&nbsp;&nbsp;LA SAGRADA BIBLIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G387"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G387'])) {echo $_SESSION['formularioHojas']['(G20)G387']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;387</td>                    
                                                <td> <label >&nbsp;&nbsp;SIETE PECADOS CAPITALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G491"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G491'])) {echo $_SESSION['formularioHojas']['(G20)G491']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;491</td>                    
                                                <td> <label >&nbsp;&nbsp;EL PADRE NUESTRO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G20)G493"  value="<?php if (isset($_SESSION['formularioHojas']['(G20)G493'])) {echo $_SESSION['formularioHojas']['(G20)G493']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;493</td>                    
                                                <td> <label >&nbsp;&nbsp;PRINCIPALES RELIGIONES</label> </td>
                                            </tr>

                                            <tr>
                                                <td> </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" class="negrita textC">21.- SALUD - ENFERMEDADES </td> 

                                            </tr>
                                            <tr>
                                                <td colspan="3" class="negrita textC">DEPORTES</td> 
                                            </tr>

                                            <tr>
                                                <td> </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)GV1"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)GV1'])) {echo $_SESSION['formularioHojas']['(G21)GV1']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;V1</td>                    
                                                <td> <label >&nbsp;&nbsp;LAS DISCAPACIDADES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G43"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G43'])) {echo $_SESSION['formularioHojas']['(G21)G43']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;43</td>                    
                                                <td> <label >&nbsp;&nbsp;EL BOTIQUÍN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G50"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G50'])) {echo $_SESSION['formularioHojas']['(G21)G50']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;50</td>                    
                                                <td> <label >&nbsp;&nbsp;LAS ENFERMEDADES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G51"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G51'])) {echo $_SESSION['formularioHojas']['(G21)G51']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;51</td>                    
                                                <td> <label >&nbsp;&nbsp;HIGIENE ESCOLAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G90"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G90'])) {echo $_SESSION['formularioHojas']['(G21)G90']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;90</td>                    
                                                <td> <label >&nbsp;&nbsp;LAS DROGAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G192"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G192'])) {echo $_SESSION['formularioHojas']['(G21)G192']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;192</td>                    
                                                <td> <label >&nbsp;&nbsp;EL FÚTBOL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G193"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G193'])) {echo $_SESSION['formularioHojas']['(G21)G193']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;193</td>                    
                                                <td> <label >&nbsp;&nbsp;EL BALONCESTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G194"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G194'])) {echo $_SESSION['formularioHojas']['(G21)G194']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;194</td>                    
                                                <td> <label >&nbsp;&nbsp;EL BÉISBOL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G195"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G195'])) {echo $_SESSION['formularioHojas']['(G21)G195']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;195</td>                    
                                                <td> <label >&nbsp;&nbsp;EL VÓLEIBOL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G221"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G221'])) {echo $_SESSION['formularioHojas']['(G21)G221']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;221</td>                    
                                                <td> <label >&nbsp;&nbsp;ENFERM. DE TRANSMIS. SEXUAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G226"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G226'])) {echo $_SESSION['formularioHojas']['(G21)G226']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;226</td>                    
                                                <td> <label >&nbsp;&nbsp;DEPORTES OLÍMPICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G239"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G239'])) {echo $_SESSION['formularioHojas']['(G21)G239']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;239</td>                    
                                                <td> <label >&nbsp;&nbsp;LAS BACTERIAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G240"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G240'])) {echo $_SESSION['formularioHojas']['(G21)G240']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;240</td>                    
                                                <td> <label >&nbsp;&nbsp;LOS VIRUS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G278"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G278'])) {echo $_SESSION['formularioHojas']['(G21)G278']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;278</td>                    
                                                <td> <label >&nbsp;&nbsp;LA VIOLENCIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G284"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G284'])) {echo $_SESSION['formularioHojas']['(G21)G284']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;284</td>                    
                                                <td> <label >&nbsp;&nbsp;EL ALCOHOLISMO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G285"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G285'])) {echo $_SESSION['formularioHojas']['(G21)G285']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;285</td>                    
                                                <td> <label >&nbsp;&nbsp;EL TABAQUISMO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G308"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G308'])) {echo $_SESSION['formularioHojas']['(G21)G308']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;308</td>                    
                                                <td> <label >&nbsp;&nbsp;LOS ANTICONCEPTIVOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G309"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G309'])) {echo $_SESSION['formularioHojas']['(G21)G309']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;309</td>                    
                                                <td> <label >&nbsp;&nbsp;EL ABORTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G314"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G314'])) {echo $_SESSION['formularioHojas']['(G21)G314']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;314</td>                    
                                                <td> <label >&nbsp;&nbsp;ENFERMEDADES INFECCIOSAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G338"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G338'])) {echo $_SESSION['formularioHojas']['(G21)G338']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;338</td>                    
                                                <td> <label >&nbsp;&nbsp;HIGIENE ESCOLAR 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G340"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G340'])) {echo $_SESSION['formularioHojas']['(G21)G340']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;340</td>                    
                                                <td> <label >&nbsp;&nbsp;EL SIDA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G341"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G341'])) {echo $_SESSION['formularioHojas']['(G21)G341']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;341</td>                    
                                                <td> <label >&nbsp;&nbsp;LA NATACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G344"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G344'])) {echo $_SESSION['formularioHojas']['(G21)G344']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;344</td>                    
                                                <td> <label >&nbsp;&nbsp;EL ATLETISMO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G429"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G429'])) {echo $_SESSION['formularioHojas']['(G21)G429']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;429</td>                    
                                                <td> <label >&nbsp;&nbsp;EL DENGUE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G435"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G435'])) {echo $_SESSION['formularioHojas']['(G21)G435']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;435</td>                    
                                                <td> <label >&nbsp;&nbsp;EDUCACIÓN FÍSICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G467"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G467'])) {echo $_SESSION['formularioHojas']['(G21)G467']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;467</td>                    
                                                <td> <label >&nbsp;&nbsp;CÁNCER DEL SENO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G468"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G468'])) {echo $_SESSION['formularioHojas']['(G21)G468']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;468</td>                    
                                                <td> <label >&nbsp;&nbsp;CÁNCER DE PRÓSTATA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G496"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G496'])) {echo $_SESSION['formularioHojas']['(G21)G496']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;496</td>                    
                                                <td> <label >&nbsp;&nbsp;PRINCIPALES DEPORTES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G497"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G497'])) {echo $_SESSION['formularioHojas']['(G21)G497']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;497</td>                    
                                                <td> <label >&nbsp;&nbsp;PROBLEM. INTRAFAMILIARES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G21)G499"  value="<?php if (isset($_SESSION['formularioHojas']['(G21)G499'])) {echo $_SESSION['formularioHojas']['(G21)G499']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;499</td>                    
                                                <td> <label >&nbsp;&nbsp;PRINCIPALES DEPORTES 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> <label ></label> </td>
                                            </tr>

                                            <tr>
                                                <td colspan="3" class=" textC negrita"> CASAS ARMABLES</td>                    

                                            </tr>
                                            <tr>
                                                <td> </td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> <label ></label> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="A1"  value="<?php if (isset($_SESSION['formularioHojas']['A1'])) {echo $_SESSION['formularioHojas']['A1']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A1</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA RURAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A2"  value="<?php if (isset($_SESSION['formularioHojas']['A2'])) {echo $_SESSION['formularioHojas']['A2']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A2</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA URBANA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A3"  value="<?php if (isset($_SESSION['formularioHojas']['A3'])) {echo $_SESSION['formularioHojas']['A3']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A3</td>                    
                                                <td> <label >&nbsp;&nbsp;SUPERMERCADO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A4"  value="<?php if (isset($_SESSION['formularioHojas']['A4'])) {echo $_SESSION['formularioHojas']['A4']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A4</td>                    
                                                <td> <label >&nbsp;&nbsp;ESCUELA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A5"  value="<?php if (isset($_SESSION['formularioHojas']['A5'])) {echo $_SESSION['formularioHojas']['A5']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A5</td>                    
                                                <td> <label >&nbsp;&nbsp;BOMBEROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A6"  value="<?php if (isset($_SESSION['formularioHojas']['A6'])) {echo $_SESSION['formularioHojas']['A6']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A6</td>                    
                                                <td> <label >&nbsp;&nbsp;EDIFICIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A7"  value="<?php if (isset($_SESSION['formularioHojas']['A7'])) {echo $_SESSION['formularioHojas']['A7']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A7</td>                    
                                                <td> <label >&nbsp;&nbsp;CENTRO DE SALUD</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A8"  value="<?php if (isset($_SESSION['formularioHojas']['A8'])) {echo $_SESSION['formularioHojas']['A8']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A8</td>                    
                                                <td> <label >&nbsp;&nbsp;BIBLIOTECA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A9"  value="<?php if (isset($_SESSION['formularioHojas']['A9'])) {echo $_SESSION['formularioHojas']['A9']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A9</td>                    
                                                <td> <label >&nbsp;&nbsp;IGLESIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A10"  value="<?php if (isset($_SESSION['formularioHojas']['A10'])) {echo $_SESSION['formularioHojas']['A10']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A10</td>                    
                                                <td> <label >&nbsp;&nbsp;ESTACIÓN DE POLICÍA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A11"  value="<?php if (isset($_SESSION['formularioHojas']['A11'])) {echo $_SESSION['formularioHojas']['A11']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A11</td>                    
                                                <td> <label >&nbsp;&nbsp;BANCO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A12"  value="<?php if (isset($_SESSION['formularioHojas']['A12'])) {echo $_SESSION['formularioHojas']['A12']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A12</td>                    
                                                <td> <label >&nbsp;&nbsp;HOSPITAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A13"  value="<?php if (isset($_SESSION['formularioHojas']['A13'])) {echo $_SESSION['formularioHojas']['A13']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A13</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA DE ADOBE O BARRO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A14"  value="<?php if (isset($_SESSION['formularioHojas']['A14'])) {echo $_SESSION['formularioHojas']['A14']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A14</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA DE PIEDRA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A15"  value="<?php if (isset($_SESSION['formularioHojas']['A15'])) {echo $_SESSION['formularioHojas']['A15']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A15</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA DE MADERA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A16"  value="<?php if (isset($_SESSION['formularioHojas']['A16'])) {echo $_SESSION['formularioHojas']['A16']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A16</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA DE CEMENTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A17"  value="<?php if (isset($_SESSION['formularioHojas']['A17'])) {echo $_SESSION['formularioHojas']['A17']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A17</td>                    
                                                <td> <label >&nbsp;&nbsp;EL ESTADIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A18"  value="<?php if (isset($_SESSION['formularioHojas']['A18'])) {echo $_SESSION['formularioHojas']['A18']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A18</td>                    
                                                <td> <label >&nbsp;&nbsp;EL AEROPUERTO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A19"  value="<?php if (isset($_SESSION['formularioHojas']['A19'])) {echo $_SESSION['formularioHojas']['A19']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A19</td>                    
                                                <td> <label >&nbsp;&nbsp;LA GASOLINERA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A20"  value="<?php if (isset($_SESSION['formularioHojas']['A20'])) {echo $_SESSION['formularioHojas']['A20']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A20</td>                    
                                                <td> <label >&nbsp;&nbsp;LA COMPUTADORA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A21"  value="<?php if (isset($_SESSION['formularioHojas']['A21'])) {echo $_SESSION['formularioHojas']['A21']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A21</td>                    
                                                <td> <label >&nbsp;&nbsp;EL PARQUE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A22"  value="<?php if (isset($_SESSION['formularioHojas']['A22'])) {echo $_SESSION['formularioHojas']['A22']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A22</td>                    
                                                <td> <label >&nbsp;&nbsp;EL MERCADO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A23"  value="<?php if (isset($_SESSION['formularioHojas']['A23'])) {echo $_SESSION['formularioHojas']['A23']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A23</td>                    
                                                <td> <label >&nbsp;&nbsp;LA FARMACIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A24"  value="<?php if (isset($_SESSION['formularioHojas']['A24'])) {echo $_SESSION['formularioHojas']['A24']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A24</td>                    
                                                <td> <label >&nbsp;&nbsp;LA FERRETERÍA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A25"  value="<?php if (isset($_SESSION['formularioHojas']['A25'])) {echo $_SESSION['formularioHojas']['A25']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A25</td>                    
                                                <td> <label >&nbsp;&nbsp;ÁRBOLES, CALLES, SEMÁFOROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A26"  value="<?php if (isset($_SESSION['formularioHojas']['A26'])) {echo $_SESSION['formularioHojas']['A26']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A26</td>                    
                                                <td> <label >&nbsp;&nbsp;PERSONAS,ANIMALES,TRANSP.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A27"  value="<?php if (isset($_SESSION['formularioHojas']['A27'])) {echo $_SESSION['formularioHojas']['A27']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A27</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA TRADICIONAL COSTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A28"  value="<?php if (isset($_SESSION['formularioHojas']['A28'])) {echo $_SESSION['formularioHojas']['A28']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A28</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA TRADICIONAL SIERRA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="A29"  value="<?php if (isset($_SESSION['formularioHojas']['A29'])) {echo $_SESSION['formularioHojas']['A29']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;A29</td>                    
                                                <td> <label >&nbsp;&nbsp;CASA TRADICIONAL ORIENTE</label> </td>
                                            </tr>



                                        </table>

                                    </div>
                                    <div class="col-sm-4">          
                                        <table class="textI">                
                                            <tr>
                                                <td  class="textC negrita">LIBROS PARA COLOREAR Y RECORTAR</td>    
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td  class="textC negrita">SOY ARTISTA</td>                    
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td > <input  style="width:40px" type="number" name="Libro1"  value="<?php if (isset($_SESSION['formularioHojas']['Libro1'])) {echo $_SESSION['formularioHojas']['Libro1']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> 1 ANIMALES DOMÉS </td>
                                                            <td> <input style="width:40px" type="number" name="Libro4"  value="<?php if (isset($_SESSION['formularioHojas']['Libro4'])) {echo $_SESSION['formularioHojas']['Libro4']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> 4 FRUTAS</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="Libro2"  value="<?php if (isset($_SESSION['formularioHojas']['Libro2'])) {echo $_SESSION['formularioHojas']['Libro2']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> 2 ANIMALES SALVAJ. </td>
                                                            <td> <input  style="width:40px" type="number" name="Libro5"  value="<?php if (isset($_SESSION['formularioHojas']['Libro5'])) {echo $_SESSION['formularioHojas']['Libro5']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px">5 LA GRANJA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="Libro3"  value="<?php if (isset($_SESSION['formularioHojas']['Libro3'])) {echo $_SESSION['formularioHojas']['Libro3']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> 3 TRANSPORTES </td>
                                                            <td> <input style="width:40px"  type="number" name="Libro6"  value="<?php if (isset($_SESSION['formularioHojas']['Libro6'])) {echo $_SESSION['formularioHojas']['Libro6']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px">6 OBJ DEL ENTORNO</td>
                                                        </tr>
                                                    </table>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> </td>                    
                                                <td> </td>
                                                <td>&nbsp;&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="textC negrita">CROQUIS EN A4</td>                    
                                            </tr>
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    

                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="CroqAmePol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAmePol'])) {echo $_SESSION['formularioHojas']['CroqAmePol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> AMÉRICA POLÍTI.</td>
                                                            <td> <input style="width:40px" type="number" name="CroqEurPol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqEurPol'])) {echo $_SESSION['formularioHojas']['CroqEurPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> EUROPA POLÍTICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="CroqAmeFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAmeFis'])) {echo $_SESSION['formularioHojas']['CroqAmeFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> AMÉRICA FÍSICA </td>
                                                            <td> <input style="width:40px" type="number" name="CroqEurFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqEurFis'])) {echo $_SESSION['formularioHojas']['CroqEurFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> EUROPA FÍSICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="CroqAfrPol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAfrPol'])) {echo $_SESSION['formularioHojas']['CroqAfrPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> ÁFRICA POLÍTICA</td>
                                                            <td> <input  style="width:40px" type="number" name="CroqMapMunPol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqMapMunPol'])) {echo $_SESSION['formularioHojas']['CroqMapMunPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> MAPAMUNDI POLÍCO </td>                                              

                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="CroqAfrFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAfrFis'])) {echo $_SESSION['formularioHojas']['CroqAfrFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px">ÁFRICA FÍSICA</td>
                                                            <td> <input  style="width:40px" type="number" name="CroqMapMunFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqMapMunFis'])) {echo $_SESSION['formularioHojas']['CroqMapMunFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> MAPAMUNDI FÍSICO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="CroqAsiPol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAsiPol'])) {echo $_SESSION['formularioHojas']['CroqAsiPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> ASIA POLÍTICA </td>
                                                            <td> <input style="width:40px" type="number" name="CroqEcuPol"  value="<?php if (isset($_SESSION['formularioHojas']['CroqEcuPol'])) {echo $_SESSION['formularioHojas']['CroqEcuPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> ECUADOR POLÍTICO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="CroqAsiFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqAsiFis'])) {echo $_SESSION['formularioHojas']['CroqAsiFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px"> ASIA FÍSICA</td>
                                                            <td> <input style="width:40px"  type="number" name="CroqEcuFis"  value="<?php if (isset($_SESSION['formularioHojas']['CroqEcuFis'])) {echo $_SESSION['formularioHojas']['CroqEcuFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px"> ECUADOR FÍSICO</td>
                                                        </tr>

                                                    </table>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="textC negrita">AFICHES EDUCATIVOS 65 x 45 cm.</td>                    
                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="AfiEcuPol"  value="<?php if (isset($_SESSION['formularioHojas']['AfiEcuPol'])) {echo $_SESSION['formularioHojas']['AfiEcuPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" >ECUADOR POLÍTICO</td>
                                                            <td> <input  style="width:40px" type="number" name="AfiVocales"  value="<?php if (isset($_SESSION['formularioHojas']['AfiVocales'])) {echo $_SESSION['formularioHojas']['AfiVocales']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > LAS VOCALES</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="AfiMapMunPol"  value="<?php if (isset($_SESSION['formularioHojas']['AfiMapMunPol'])) {echo $_SESSION['formularioHojas']['AfiMapMunPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > MAPAMUNDI POLÍTI. </td>
                                                            <td> <input  style="width:40px" type="number" name="Afiescudo"  value="<?php if (isset($_SESSION['formularioHojas']['Afiescudo'])) {echo $_SESSION['formularioHojas']['Afiescudo']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > EL ESCUDO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="AfiAbeIng"  value="<?php if (isset($_SESSION['formularioHojas']['AfiAbeIng'])) {echo $_SESSION['formularioHojas']['AfiAbeIng']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > EL ABECEDARIO INGL</td>
                                                            <td> <input  style="width:40px" type="number" name="AfiBande"  value="<?php if (isset($_SESSION['formularioHojas']['AfiBande'])) {echo $_SESSION['formularioHojas']['AfiBande']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > LA BANDERA </td>

                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="AfiAbeEsp"  value="<?php if (isset($_SESSION['formularioHojas']['AfiAbeEsp'])) {echo $_SESSION['formularioHojas']['AfiAbeEsp']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > EL ABECEDARIO ESPA.</td>
                                                            <td> <input  style="width:40px" type="number" name="AfiNume"  value="<?php if (isset($_SESSION['formularioHojas']['AfiNume'])) {echo $_SESSION['formularioHojas']['AfiNume']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > LOS NÚMEROS</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="AfiTabMul"  value="<?php if (isset($_SESSION['formularioHojas']['AfiTabMul'])) {echo $_SESSION['formularioHojas']['AfiTabMul']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" >TABLAS DE MULTIPLIC. </td>

                                                        </tr>


                                                    </table>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="textC negrita">MAPAS FULL COLOR EN A3</td> 
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="MapEcuPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapEcuPol'])) {echo $_SESSION['formularioHojas']['MapEcuPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > ECUADOR POLÍTIC.</td>
                                                            <td> <input  style="width:40px" type="number" name="MapAmeCenFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeCenFis'])) {echo $_SESSION['formularioHojas']['MapAmeCenFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > AMÉ. CENT. FISIC.</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="MapEcuFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapEcuFis'])) {echo $_SESSION['formularioHojas']['MapEcuFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > ECUADOR FÍSICO </td>
                                                            <td> <input  style="width:40px" type="number" name="MapAfrPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapAfrPol'])) {echo $_SESSION['formularioHojas']['MapAfrPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >ÁFRICA POLÍTICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="MapAmeSurPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeSurPol'])) {echo $_SESSION['formularioHojas']['MapAmeSurPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >AMÉR.SUR POLIT.</td>
                                                            <td> <input style="width:40px" type="number" name="MapAfrFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapAfrFis'])) {echo $_SESSION['formularioHojas']['MapAfrFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > ÁFRICA FÍSICA </td>

                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="MapAmeSurFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeSurFis'])) {echo $_SESSION['formularioHojas']['MapAmeSurFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > AMÉR.SUR FISICO</td>
                                                            <td> <input style="width:40px" type="number" name="MapAsiPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapAsiPol'])) {echo $_SESSION['formularioHojas']['MapAsiPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > ASIA POLÍTICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="MapAmeNorPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeNorPol'])) {echo $_SESSION['formularioHojas']['MapAmeNorPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > AMÉ.NORTE POLIT. </td>
                                                            <td> <input style="width:40px" type="number" name="MapAsiFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapAsiFis'])) {echo $_SESSION['formularioHojas']['MapAsiFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > ASIA FÍSICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="MapAmeNorFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeNorFis'])) {echo $_SESSION['formularioHojas']['MapAmeNorFis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > AMÉ.NORTE FÍSICO</td>
                                                            <td> <input style="width:40px" type="number" name="MapEurPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapEurPol'])) {echo $_SESSION['formularioHojas']['MapEurPol']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > EUROPA POLÍTICA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="MapAmeCenPol"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmeCenPol'])) {echo $_SESSION['formularioHojas']['MapAmeCenPol']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > AMÉR. CENT. POLIT.</td>
                                                            <td> <input style="width:40px" type="number" name="MapEurFis"  value="<?php if (isset($_SESSION['formularioHojas']['MapEurFis'])) {echo $_SESSION['formularioHojas']['MapEurFis']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >EUROPA FÍSICA</td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td> <input style="width:40px" type="number" name="MapAmePolCom"  value="<?php if (isset($_SESSION['formularioHojas']['MapAmePolCom'])) {echo $_SESSION['formularioHojas']['MapAmePolCom']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" > AMERICA POLI COMPLE</td>                                                        
                                                            <td> <input style="width:40px" type="number" name="MapPlanis"  value="<?php if (isset($_SESSION['formularioHojas']['MapPlanis'])) {echo $_SESSION['formularioHojas']['MapPlanis']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" > PLANISFERIO POLÍTICO</td>
                                                        </tr>


                                                    </table>
                                                </td>

                                            </tr>



                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td></td> 
                                                            <td>&nbsp;&nbsp;</td>
                                                            <td> </td>                    


                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <table>

                                                                    <tr>
                                                                        <td colspan="4" class="textC negrita">CUCAS  PROFESIONES</td>                    
                                                                    </tr>
                                                                    <td>&nbsp;</td>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B1"  value="<?php if (isset($_SESSION['formularioHojas']['B1'])) {echo $_SESSION['formularioHojas']['B1']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" >B1 SECRETARIA.</td> 
                                                                        <td> <input style="width:40px" type="number" name="B2"  value="<?php if (isset($_SESSION['formularioHojas']['B2'])) {echo $_SESSION['formularioHojas']['B2']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B2 PERIODISTA </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B3"  value="<?php if (isset($_SESSION['formularioHojas']['B3'])) {echo $_SESSION['formularioHojas']['B3']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B3 ESTUDIANTE </td>
                                                                        <td> <input style="width:40px" type="number" name="B4"  value="<?php if (isset($_SESSION['formularioHojas']['B4'])) {echo $_SESSION['formularioHojas']['B4']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B4 PINTORA </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input  style="width:40px" type="number" name="B5"  value="<?php if (isset($_SESSION['formularioHojas']['B5'])) {echo $_SESSION['formularioHojas']['B5']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B5 DOCTORA </td>
                                                                        <td> <input style="width:40px" type="number" name="B6"  value="<?php if (isset($_SESSION['formularioHojas']['B6'])) {echo $_SESSION['formularioHojas']['B6']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B6 AZAFATA </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B7"  value="<?php if (isset($_SESSION['formularioHojas']['B7'])) {echo $_SESSION['formularioHojas']['B7']; }?>"  min="5" max="9999" step="5" > </td>  
                                                                        <td style="font-size: 10.5px" > B7 CHOLA CUEN. </td>
                                                                    </tr>
                                                                </table>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <table>

                                                                    <tr>

                                                                        <td>&nbsp;</td>                    

                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="4" class="textC negrita">CUCAS  TRAJES TÍPICOS</td>                    
                                                                    </tr>
                                                                    <td>&nbsp;</td>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B8"  value="<?php if (isset($_SESSION['formularioHojas']['B8'])) {echo $_SESSION['formularioHojas']['B8']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10.5px" >&nbsp;&nbsp;B8 OTAVALEÑA</td>
                                                                        <td> <input style="width:40px" type="number" name="B9"  value="<?php if (isset($_SESSION['formularioHojas']['B9'])) {echo $_SESSION['formularioHojas']['B9']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10.5px" >&nbsp;&nbsp;B9 OTAVALEÑO</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B10"  value="<?php if (isset($_SESSION['formularioHojas']['B10'])) {echo $_SESSION['formularioHojas']['B10']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10.5px" >&nbsp;&nbsp;B10 SARAGURA</td>
                                                                        <td> <input style="width:40px" type="number" name="B11"  value="<?php if (isset($_SESSION['formularioHojas']['B11'])) {echo $_SESSION['formularioHojas']['B11']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10.5px" >&nbsp;&nbsp;B11 SARAGURA</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td> <input style="width:40px" type="number" name="B12"  value="<?php if (isset($_SESSION['formularioHojas']['B12'])) {echo $_SESSION['formularioHojas']['B12']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10px" >B12 ESMERALDEÑA</td>
                                                                        <td> <input style="width:40px" type="number" name="B13"  value="<?php if (isset($_SESSION['formularioHojas']['B13'])) {echo $_SESSION['formularioHojas']['B13']; }?>"  min="5" max="9999" step="5" > </td>   
                                                                        <td style="font-size: 10px" >B13 ESMERALDEÑO</td>
                                                                    </tr>

                                                                </table>
                                                            </td>

                                                        </tr>                                                  




                                                    </table>

                                                </td>

                                            </tr>



                                            <tr>
                                                <td></td>                    
                                                <td>&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table>

                                                        <tr>
                                                            <td colspan="4" class="textC negrita">CUCAS POR REGIÓN</td>                    
                                                        </tr>
                                                        <td>&nbsp;</td>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="B14"  value="<?php if (isset($_SESSION['formularioHojas']['B14'])) {echo $_SESSION['formularioHojas']['B14']; }?>"  min="5" max="9999" step="5" > </td>  
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;B14 COSTEÑA</td>
                                                            <td> <input style="width:40px" type="number" name="B16"  value="<?php if (isset($_SESSION['formularioHojas']['B16'])) {echo $_SESSION['formularioHojas']['B16']; }?>"  min="5" max="9999" step="5" > </td>   
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;B16 GALAPAGUEÑA</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="B15"  value="<?php if (isset($_SESSION['formularioHojas']['B15'])) {echo $_SESSION['formularioHojas']['B15']; }?>"  min="5" max="9999" step="5" > </td>  
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;B15 SERRANA </td>
                                                            <td> <input style="width:40px" type="number" name="B17"  value="<?php if (isset($_SESSION['formularioHojas']['B17'])) {echo $_SESSION['formularioHojas']['B17']; }?>"  min="5" max="9999" step="5" > </td>   
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;B17 AMAZÓNICA</td>
                                                        </tr>
                                                    </table>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td colspan="4" class="textC negrita">CUERPOS SUELTOS GRANDES</td>                    
                                                        </tr>
                                                        <tr>

                                                            <td>&nbsp;&nbsp;</td>                    

                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="CueTetra"  value="<?php if (isset($_SESSION['formularioHojas']['CueTetra'])) {echo $_SESSION['formularioHojas']['CueTetra']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;TETRAEDRO</td>
                                                            <td> <input style="width:40px" type="number" name="CueParale"  value="<?php if (isset($_SESSION['formularioHojas']['CueParale'])) {echo $_SESSION['formularioHojas']['CueParale']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10px" >&nbsp;&nbsp;PARALELEPÍPEDO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="CueCubo"  value="<?php if (isset($_SESSION['formularioHojas']['CueCubo'])) {echo $_SESSION['formularioHojas']['CueCubo']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;CUBO </td>
                                                            <td> <input style="width:40px" type="number" name="CueCono"  value="<?php if (isset($_SESSION['formularioHojas']['CueCono'])) {echo $_SESSION['formularioHojas']['CueCono']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;CONO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input  style="width:40px" type="number" name="CuePiraCua"  value="<?php if (isset($_SESSION['formularioHojas']['CuePiraCua'])) {echo $_SESSION['formularioHojas']['CuePiraCua']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10px" >&nbsp;&nbsp;PIRÁMIDE CUAD.</td>
                                                            <td> <input  style="width:40px" type="number" name="CueCilin"  value="<?php if (isset($_SESSION['formularioHojas']['CueCilin'])) {echo $_SESSION['formularioHojas']['CueCilin']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;CILINDRO</td>
                                                        </tr>
                                                        <tr>
                                                            <td> <input style="width:40px" type="number" name="CueEsfera"  value="<?php if (isset($_SESSION['formularioHojas']['CueEsfera'])) {echo $_SESSION['formularioHojas']['CueEsfera']; }?>"  min="1" max="9999" step="1" > </td>  
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;ESFERA </td>
                                                            <td> <input style="width:40px" type="number" name="Cueprisma"  value="<?php if (isset($_SESSION['formularioHojas']['Cueprisma'])) {echo $_SESSION['formularioHojas']['Cueprisma']; }?>"  min="1" max="9999" step="1" > </td>   
                                                            <td style="font-size: 10.5px" >&nbsp;&nbsp;PRISMA HEXAGO.</td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>&nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <td colspan="3" class="textC negrita">LIBRO DE 28 FIGURAS GEOMÉTRICAS</td>                    
                                                        </tr>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <tr>
                                                            <td> <input  type="number" name="L28Fig" value="<?php if (isset($_SESSION['formularioHojas']['L28Fig'])) {echo $_SESSION['formularioHojas']['L28Fig']; }?>" min="3" max="9999" step="3"  > </td>                    
                                                            <td colspan="3"> <label >&nbsp;&nbsp;LIBRO 28 FIGURAS GEOMÉTRICAS</label> </td>

                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>&nbsp;&nbsp;</td>                    

                                            </tr>

                                            <tr>
                                                <td>
                                                    <table>

                                                        <tr> 

                                                            <td colspan="3" class="textC negrita">MUESTRAS DE CLASES DE SUELOS</td>                    
                                                        </tr>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <tr>

                                                            <td> <input  type="number" name="MuesSue" value="<?php if (isset($_SESSION['formularioHojas']['MuesSue'])) {echo $_SESSION['formularioHojas']['MuesSue']; }?>" min="3" max="9999" step="3"  > </td>                    
                                                            <td colspan="3"> &nbsp;&nbsp; MUESTRAS DE CLASES DE SUELOS</td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>

                                            <tr>

                                                <td>&nbsp;&nbsp;</td>                    

                                            </tr>


                                            <tr>
                                                <td>
                                                    <table>

                                                        <tr> 

                                                            <td colspan="4" class="textC negrita">CARTILLA DE LAS 4 OPERACIONES</td>                    
                                                        </tr>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <td>&nbsp;&nbsp;</td>
                                                        <tr>

                                                            <td> <input  type="number" name="Cart4Oper" value="<?php if (isset($_SESSION['formularioHojas']['Cart4Oper'])) {echo $_SESSION['formularioHojas']['Cart4Oper']; }?>" min="6" max="9999" step="6"  > </td>                    
                                                            <td> <label >&nbsp;&nbsp;CARTILLA DE LAS 4 OPERACIONES</label> </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>


                                            <tr>

                                                <td> &nbsp;&nbsp;</td>                    

                                            </tr>


                                            <tr>
                                                <td>
                                                    <table>

                                                        <tr> 

                                                            <td colspan="3" class="textC negrita">TABLA DE ELEMENTOS QUÍMICOS</td>                    
                                                        </tr>
                                                        <td>&nbsp;&nbsp;</td>

                                                        <tr>

                                                            <td> <input  type="number" name="TabEle" value="<?php if (isset($_SESSION['formularioHojas']['TabEle'])) {echo $_SESSION['formularioHojas']['TabEle']; }?>" min="10" max="9999" step="10"  > </td>                    
                                                            <td> <label >&nbsp;&nbsp;TABLA DE ELEMENTOS QUÍMICOS</label> </td>
                                                        </tr>

                                                    </table>
                                                </td>
                                            </tr>




                                            <tr>

                                                <td> &nbsp;&nbsp;</td>                    

                                            </tr>


                                            <tr>
                                                <td>
                                                    <table>

                                                        <tr> 

                                                            <td colspan="4" class="textC negrita">BILLETES Y MONEDAS DIDÁCTICOS</td>                    
                                                        </tr>
                                                        <td>&nbsp;&nbsp;</td>

                                                        <tr>

                                                            <td> <input  type="number" name="BillDida" value="<?php if (isset($_SESSION['formularioHojas']['BillDida'])) {echo $_SESSION['formularioHojas']['BillDida']; }?>" min="12" max="9999" step="12"  > </td>                    
                                                            <td> <label>&nbsp;&nbsp;BILLETES Y MONEDAS DIDÁCTICOS</label> </td>
                                                        </tr>

                                                    </table>
                                                </td>
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