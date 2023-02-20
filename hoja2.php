
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
                                                <td> <input  type="number" name="(G6)G481" value="<?php if (isset($_SESSION['formularioHojas']['(G6)G481'])) {echo $_SESSION['formularioHojas']['(G6)G481']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;481 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA CHIBCHA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)G483" value="<?php if (isset($_SESSION['formularioHojas']['(G6)G483'])) {echo $_SESSION['formularioHojas']['(G6)G483']; }?>" min="5" max="9999" step="5"   > </td>                    
                                                <td> &nbsp;&nbsp;483 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA OLMECA</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE20" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE20'])) {echo $_SESSION['formularioHojas']['(G6)GE20']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E20 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;GRUPOS ETNICOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE61" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE61'])) {echo $_SESSION['formularioHojas']['(G6)GE61']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E61 </td>                    
                                                <td> <label for="f">&nbsp;&nbsp; GRUPOS ETNICOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE77" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE77'])) {echo $_SESSION['formularioHojas']['(G6)GE77']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E77 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA CHORRERA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE78" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE78'])) {echo $_SESSION['formularioHojas']['(G6)GE78']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E78 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;COTOCOLLAO - MACHALILLA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE79" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE79'])) {echo $_SESSION['formularioHojas']['(G6)GE79']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E79 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA VALDIVIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE80" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE80'])) {echo $_SESSION['formularioHojas']['(G6)GE80']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E80 </td>                    
                                                <td> <label for="f">&nbsp;&nbsp;CULT. CERRO-NARRIO PASTAZA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE81" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE81'])) {echo $_SESSION['formularioHojas']['(G6)GE81']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E81 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA TOLITA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE82" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE82'])) {echo $_SESSION['formularioHojas']['(G6)GE82']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E82 </td>                    
                                                <td> <label for="f">&nbsp;&nbsp;CULTURA BAHIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE83" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE83'])) {echo $_SESSION['formularioHojas']['(G6)GE83']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E83 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA GUANGALA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE84" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE84'])) {echo $_SESSION['formularioHojas']['(G6)GE84']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E84 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA JAMA COAQUE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE85" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE85'])) {echo $_SESSION['formularioHojas']['(G6)GE85']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E85 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA NEGATIVO CARCHI </label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE86" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE86'])) {echo $_SESSION['formularioHojas']['(G6)GE86']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E86 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA JAMBELÍ-TEJAR-DAUL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE87" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE87'])) {echo $_SESSION['formularioHojas']['(G6)GE87']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E87 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULT. PANZALEO - TUNCAHÚAN</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G6)GE88" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE88'])) {echo $_SESSION['formularioHojas']['(G6)GE88']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E88 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA MANTEÑA</label> </td>
                                            </tr>
                                            <tr> 
                                                <td> <input  type="number" name="(G6)GE89" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE89'])) {echo $_SESSION['formularioHojas']['(G6)GE89']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E89 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA HUANCAVILCA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE90" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE90'])) {echo $_SESSION['formularioHojas']['(G6)GE90']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E90 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULT. MILAGRO - QUEVEDO</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G6)GE91" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE91'])) {echo $_SESSION['formularioHojas']['(G6)GE91']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E91 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA PURUHÁ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE92"  value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE92'])) {echo $_SESSION['formularioHojas']['(G6)GE92']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E92 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CULTURA CAÑARI</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE135" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE135'])) {echo $_SESSION['formularioHojas']['(G6)GE135']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E135 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;NACIONALIDADES INDÍG. ECU.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE136" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE136'])) {echo $_SESSION['formularioHojas']['(G6)GE136']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E136 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PUEBLOS INDÍGENAS ECUAD.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G6)GE137" value="<?php if (isset($_SESSION['formularioHojas']['(G6)GE137'])) {echo $_SESSION['formularioHojas']['(G6)GE137']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;E137 </td>                    
                                                <td> <label for="">&nbsp;&nbsp; PRIN. CULTURAS DEL ECUAD.</label> </td>
                                            </tr>

                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>                    
                                                <td></td>
                                            </tr> 
                                            <tr>                                                             
                                                <td colspan="3" class="textC negrita"> &nbsp;&nbsp; 7.- ECOLOGÍA - SUELO - AGUA - AIRE</td>                    
                                            </tr>
                                            <tr>                                                             
                                                <td colspan="3" class="textC negrita"> &nbsp;&nbsp; BIOMAS - PARQUES - RESERVAS NATU.</td>                    
                                            </tr>                                      
                                            <tr>
                                                <td></td>                    
                                                <td> &nbsp;&nbsp; </td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi1" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi1'])) {echo $_SESSION['formularioHojas']['(G7)Gi1']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i1 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS MINERALES METÁLICOS</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G7)Gi2" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi2'])) {echo $_SESSION['formularioHojas']['(G7)Gi2']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i2</td>                    
                                                <td> <label for="">&nbsp;&nbsp;MINERALES NO METÁLICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi3" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi3'])) {echo $_SESSION['formularioHojas']['(G7)Gi3']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i3 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CICLO DEL NITRÓGENO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi4" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi4'])) {echo $_SESSION['formularioHojas']['(G7)Gi4']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i4 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CICLO DEL CARBÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi6" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi6'])) {echo $_SESSION['formularioHojas']['(G7)Gi6']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i6 </td>                   
                                                <td> <label for="">&nbsp;&nbsp;CONTAMIN. MEDIO AMBIENTE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi7" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi7'])) {echo $_SESSION['formularioHojas']['(G7)Gi7']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i7 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;HIDROELÉC. DEL ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi8" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi8'])) {echo $_SESSION['formularioHojas']['(G7)Gi8']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i8 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EDUCACIÓN AMBIENTAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi9" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi9'])) {echo $_SESSION['formularioHojas']['(G7)Gi9']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i9 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;NIVELES DE LA NATURALEZA</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G7)Gi10" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi10'])) {echo $_SESSION['formularioHojas']['(G7)Gi10']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;i10 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA NATURALEZA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi11" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi11'])) {echo $_SESSION['formularioHojas']['(G7)Gi11']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;i11 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;RELACION DE LAS ESPECIES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)Gi12" value="<?php if (isset($_SESSION['formularioHojas']['(G7)Gi12'])) {echo $_SESSION['formularioHojas']['(G7)Gi12']; }?>" min="5" max="9999" step="5"   > </td>                    
                                                <td> &nbsp;&nbsp;i12 </td>                    
                                                <td> <label for="LaminaSP38">&nbsp;&nbsp;BIODIV. FAUNA Y FLORA ECUA.</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G7)G22" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G22'])) {echo $_SESSION['formularioHojas']['(G7)G22']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;22 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL SUELO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G23" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G23'])) {echo $_SESSION['formularioHojas']['(G7)G23']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;23 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL AGUA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G24" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G24'])) {echo $_SESSION['formularioHojas']['(G7)G24']; }?>" min="5" max="9999" step="5"  > </td>                 
                                                <td> &nbsp;&nbsp;24 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL AIRE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G85" value="<?php if (isset($_SESSION['formularioHojas']['(G7)85'])) {echo $_SESSION['formularioHojas']['(G7)G85']; }?>" min="5" max="9999" step="5"  > </td> 
                                                <td> &nbsp;&nbsp;85 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS ROCAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G86" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G86'])) {echo $_SESSION['formularioHojas']['(G7)G86']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;86 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS MINERALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G220" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G220'])) {echo $_SESSION['formularioHojas']['(G7)G220']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;220 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ECOSISTEMA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G225" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G225'])) {echo $_SESSION['formularioHojas']['(G7)G225']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;225 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CONTAMINACIÓN DEL SUELO</label> </td>
                                            </tr> 
                                            <tr>
                                                <td> <input  type="number" name="(G7)G227" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G227'])) {echo $_SESSION['formularioHojas']['(G7)G227']; }?>" min="5" max="9999" step="5"  > </td>             
                                                <td> &nbsp;&nbsp;227 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;RESER RENOV Y NO RENOV.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G229" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G229'])) {echo $_SESSION['formularioHojas']['(G7)G229']; }?>" min="5" max="9999" step="5"  > </td>                   
                                                <td> &nbsp;&nbsp;229 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CONTAMINACIÓN DEL AGUA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G230"  value="<?php if (isset($_SESSION['formularioHojas']['(G7)G230'])) {echo $_SESSION['formularioHojas']['(G7)G230']; }?>" min="5" max="9999" step="5"  > </td>                
                                                <td> &nbsp;&nbsp;230 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CONTAMINACIÓN DEL AIRE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G232" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G232'])) {echo $_SESSION['formularioHojas']['(G7)G232']; }?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;232 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ECOSISTEMAS TERRESTRES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G343"  value="<?php if (isset($_SESSION['formularioHojas']['(G7)G343'])) {echo $_SESSION['formularioHojas']['(G7)G343']; }?>" min="5" max="9999" step="5"  > </td>       
                                                <td> &nbsp;&nbsp;343 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUIDADOS MEDIO AMBIENTE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G348"  value="<?php if (isset($_SESSION['formularioHojas']['(G7)G348'])) {echo $_SESSION['formularioHojas']['(G7)G348']; }?>" min="5" max="9999" step="5"  > </td>     
                                                <td> &nbsp;&nbsp;348 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;AGRICULTURA 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G349" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G349'])) {echo $_SESSION['formularioHojas']['(G7)G349']; }?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;349 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;AGRICULTURA 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G350"  value="<?php if (isset($_SESSION['formularioHojas']['(G7)G350'])) {echo $_SESSION['formularioHojas']['(G7)G350']; }?>" min="5" max="9999" step="5"  > </td>              
                                                <td> &nbsp;&nbsp;350 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASES DE SUELOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G386" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G386'])) {echo $_SESSION['formularioHojas']['(G7)G386']; }?>" min="5" max="9999" step="5"  > </td>                
                                                <td> &nbsp;&nbsp;386</td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL HUERTO ESCOLAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G399" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G399'])) {echo $_SESSION['formularioHojas']['(G7)G399']; }?>" min="5" max="9999" step="5"  > </td>        
                                                <td> &nbsp;&nbsp;399 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BIOMAS ACUÁTICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G443" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G443'])) {echo $_SESSION['formularioHojas']['(G7)G443']; }?>" min="5" max="9999" step="5"  > </td>       
                                                <td> &nbsp;&nbsp;443 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;USOS DEL AGUA Y EL AIRE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G447"  value="<?php if (isset($_SESSION['formularioHojas']['(G7)G447'])) {echo $_SESSION['formularioHojas']['(G7)G447']; }?>" min="5" max="9999" step="5"  > </td>             
                                                <td> &nbsp;&nbsp;447 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;RECICLAJE DE LA BASURA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G466" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G466'])) {echo $_SESSION['formularioHojas']['(G7)G466']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;466 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BIOMA - DESIERTOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G469" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G469'])) {echo $_SESSION['formularioHojas']['(G7)G469']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;469 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;POTABILIZACION DEL AGUA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G470" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G470'])) {echo $_SESSION['formularioHojas']['(G7)G470']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;470 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BIOMA - BOSQUE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G471" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G471'])) {echo $_SESSION['formularioHojas']['(G7)G471']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;471 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BIOMA - PASTIZAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G494" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G494'])) {echo $_SESSION['formularioHojas']['(G7)G494']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;494 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ESTADOS DEL AGUA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)G498" value="<?php if (isset($_SESSION['formularioHojas']['(G7)G498'])) {echo $_SESSION['formularioHojas']['(G7)G498']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;498 </td>                    
                                                <td> <label for="">&nbsp;&nbsp; EL CICLO DEL OXÍGENOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)GE4" value="<?php if (isset($_SESSION['formularioHojas']['(G7)GE4'])) {echo $_SESSION['formularioHojas']['(G7)GE4']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;E4 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;AGRIC Y GANAD COSTA-GALÍP.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)GE5" value="<?php if (isset($_SESSION['formularioHojas']['(G7)GE5'])) {echo $_SESSION['formularioHojas']['(G7)GE5']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;E5 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;AGRIC Y GANAD SIERRA-ORIEN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)GE34" value="<?php if (isset($_SESSION['formularioHojas']['(G7)GE34'])) {echo $_SESSION['formularioHojas']['(G7)GE34']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;E34 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PARQUES NAC. DEL ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G7)GE35" value="<?php if (isset($_SESSION['formularioHojas']['(G7)GE35'])) {echo $_SESSION['formularioHojas']['(G7)GE35']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;E35 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;RESERVAS NATUR. ECUADOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>
                                            <tr>                                                           
                                                <td colspan="3" class="textC negrita"> &nbsp;&nbsp;8.- FAMILIA - COMUNIDAD - SERVICIOS</td>                    
                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td>  </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G8)GK6" value="<?php if (isset($_SESSION['formularioHojas']['(G8)GK6'])) {echo $_SESSION['formularioHojas']['(G8)GK6']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;K6 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA POBREZA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)GK7"  value="<?php if (isset($_SESSION['formularioHojas']['(G8)GK7'])) {echo $_SESSION['formularioHojas']['(G8)GK7']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;K7 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PRENDAS DE VESTIR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)GK8"  value="<?php if (isset($_SESSION['formularioHojas']['(G8)GK8'])) {echo $_SESSION['formularioHojas']['(G8)GK8']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;K8 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;PARROQUIA RURAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)GK9" value="<?php if (isset($_SESSION['formularioHojas']['(G8)GK9'])) {echo $_SESSION['formularioHojas']['(G8)GK9']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;K9 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;EL BARRIO</label> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G8)G16" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G16'])) {echo $_SESSION['formularioHojas']['(G8)G16']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;16 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA FAMILIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G35"  value="<?php if (isset($_SESSION['formularioHojas']['(G8)G35'])) {echo $_SESSION['formularioHojas']['(G8)G35']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;35 </td>                  
                                                <td> <label for="">&nbsp;&nbsp;LAS PROFESIONES 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G36" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G36'])) {echo $_SESSION['formularioHojas']['(G8)G36']; }?>" min="5" max="9999" step="5"  > </td>                  
                                                <td> &nbsp;&nbsp;36 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS OFICIOS 1S</label> </td>
                                            </tr>


                                        </table>

                                    </div>
                                    <div class="col-sm-4">          
                                        <table class="textI">                
                                            <tr>
                                                <td> <input  type="number" name="(G8)G44" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G44'])) {echo $_SESSION['formularioHojas']['(G8)G44']; }?>" min="5" max="9999" step="5"  > </td>                    
                                                <td> &nbsp;&nbsp;44 </td>                    
                                                <td> <label for="">&nbsp;EL COSTURERO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G45" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G45'])) {echo $_SESSION['formularioHojas']['(G8)G45']; }?>" min="5" max="9999" step="5"   > </td>                    
                                                <td> &nbsp;&nbsp;45 </td>                    
                                                <td> <label for="">&nbsp;ARREGLO DE MESA</label> </td>
                                            </tr>                                       
                                            <tr>
                                                <td> <input  type="number" name="(G8)G46" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G46'])) {echo $_SESSION['formularioHojas']['(G8)G46']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;46 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;BUENOS MODALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G53" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G53'])) {echo $_SESSION['formularioHojas']['(G8)G53']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;53 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;SERVICIOS PÚBLICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G69" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G69'])) {echo $_SESSION['formularioHojas']['(G8)G69']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;69 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA CASA Y SUS DEPENDENCIAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G70" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G70'])) {echo $_SESSION['formularioHojas']['(G8)G70']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;70 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;ARTEFAC. Y UTENS. DEL HOGAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G114" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G114'])) {echo $_SESSION['formularioHojas']['(G8)G114']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;114 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;MANZANA - BARRIO - PARROQUIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G180" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G180'])) {echo $_SESSION['formularioHojas']['(G8)G180']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;180</td>                    
                                                <td> <label for="">&nbsp;&nbsp;VALORES MORALES 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G181" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G181'])) {echo $_SESSION['formularioHojas']['(G8)G181']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;181 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;VALORES MORALES 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G489" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G489'])) {echo $_SESSION['formularioHojas']['(G8)G489']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;489 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;VALORES MORALES 3</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G209" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G209'])) {echo $_SESSION['formularioHojas']['(G8)G209']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;209 </td>                    
                                                <td> <label for="">&nbsp;&nbsp;DERECHOS DEL NIÃ‘O</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G210" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G210'])) {echo $_SESSION['formularioHojas']['(G8)G210']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;210</td>                    
                                                <td> <label for="">&nbsp;&nbsp;DERECHOS HUMANOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G211" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G211'])) {echo $_SESSION['formularioHojas']['(G8)G211']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;211</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OFICIOS DEL HOGAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G212" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G212'])) {echo $_SESSION['formularioHojas']['(G8)G212']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;212</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ÚTILES ESCOLARES</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G8)G216" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G216'])) {echo $_SESSION['formularioHojas']['(G8)G216']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;216</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ÚTILES DE ASEO PERSONAL</label> </td>
                                            </tr><tr>
                                                <td> <input  type="number" name="(G8)G217" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G217'])) {echo $_SESSION['formularioHojas']['(G8)G217']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;217</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASES DE VESTIDOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G228" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G228'])) {echo $_SESSION['formularioHojas']['(G8)G228']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;228</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ACCIDENTES DEL HOGAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G245" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G245'])) {echo $_SESSION['formularioHojas']['(G8)G245']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;245</td>                    
                                                <td> <label for="">&nbsp;&nbsp;DEPENDENCIAS DE LA ESCUELA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G260" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G260'])) {echo $_SESSION['formularioHojas']['(G8)G260']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;260</td>                    
                                                <td> <label for="">&nbsp;&nbsp;THE FAMILY - LA FAMILIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G261" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G261'])) {echo $_SESSION['formularioHojas']['(G8)G261']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;261</td>                    
                                                <td> <label for="">&nbsp;&nbsp;MY SCHOOL - MI ESCUELA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G321" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G321'])) {echo $_SESSION['formularioHojas']['(G8)G321']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;321</td>                    
                                                <td> <label for="">&nbsp;&nbsp;DEBERES DEL NIÃ‘O</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G359" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G359'])) {echo $_SESSION['formularioHojas']['(G8)G359']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;359</td>                    
                                                <td> <label for="">&nbsp;&nbsp;COMUNIDAD URBANA Y RURAL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G380" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G380'])) {echo $_SESSION['formularioHojas']['(G8)G380']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;380</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ÚTILES Y MATERIALES OFICINA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G381" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G381'])) {echo $_SESSION['formularioHojas']['(G8)G381']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;381</td>                    
                                                <td> <label for="">&nbsp;&nbsp;EQUIPOS Y MUEBLES OFICINA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G394" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G394'])) {echo $_SESSION['formularioHojas']['(G8)G394']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;394</td>                    
                                                <td> <label for="">&nbsp;&nbsp;DERECHOS DEL CONSUMIDOR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G397" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G397'])) {echo $_SESSION['formularioHojas']['(G8)G397']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;397</td>                    
                                                <td> <label for="">&nbsp;&nbsp;SERVIDORES PÚBLICOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G398" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G398'])) {echo $_SESSION['formularioHojas']['(G8)G398']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;398</td>                    
                                                <td> <label for="">&nbsp;&nbsp;SERVICIOS PRIVADOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G444" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G444'])) {echo $_SESSION['formularioHojas']['(G8)G444']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;444</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANTIVALORES 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G445" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G445'])) {echo $_SESSION['formularioHojas']['(G8)G445']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;445</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ANTIVALORES 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G446" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G446'])) {echo $_SESSION['formularioHojas']['(G8)G446']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;446</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA FAMI-ÁRBOL GENEALÓGICO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G472" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G472'])) {echo $_SESSION['formularioHojas']['(G8)G472']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;472</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA MIGRACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G474" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G474'])) {echo $_SESSION['formularioHojas']['(G8)G474']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;474</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LAS PROFESIONES 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G479" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G479'])) {echo $_SESSION['formularioHojas']['(G8)G479']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;479</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS OFICIOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G500" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G500'])) {echo $_SESSION['formularioHojas']['(G8)G500']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;500</td>                    
                                                <td> <label for="">&nbsp;&nbsp;PRINC. JUGUETES NIÃ‘OS/NIÃ‘AS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)G511" value="<?php if (isset($_SESSION['formularioHojas']['(G8)G511'])) {echo $_SESSION['formularioHojas']['(G8)G511']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;511</td>                    
                                                <td> <label for="">&nbsp;&nbsp;JUEGOS TRADICIONALES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G8)GE36"  value="<?php if (isset($_SESSION['formularioHojas']['(G8)GE36'])) {echo $_SESSION['formularioHojas']['(G8)GE36']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;E36</td>                    
                                                <td> <label for="">&nbsp;&nbsp;TIPOS DE VIVIENDA</label> </td>
                                            </tr>


                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> 9.- FIGURAS GEOMÉTRICAS</td>                  

                                            </tr>
                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> COLORES - NÚMEROS - MATEMÁTICAS</td>                  

                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)GL1" value="<?php if (isset($_SESSION['formularioHojas']['(G9)GL1'])) {echo $_SESSION['formularioHojas']['(G9)GL1']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;L1</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CLASIFIC. DE LOS NÚMEROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)GL2" value="<?php if (isset($_SESSION['formularioHojas']['(G9)GL2'])) {echo $_SESSION['formularioHojas']['(G9)GL2']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;L2</td>                    
                                                <td> <label for="">&nbsp;&nbsp;FIGURAS GEOMÉT. EN EL PLANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)GL3" value="<?php if (isset($_SESSION['formularioHojas']['(G9)GL3'])) {echo $_SESSION['formularioHojas']['(G9)GL3']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;L3</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LÍNEAS Y ÁNGULOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)GL4" value="<?php if (isset($_SESSION['formularioHojas']['(G9)GL4'])) {echo $_SESSION['formularioHojas']['(G9)GL4']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;L4</td>                    
                                                <td> <label for="">&nbsp;&nbsp;UNIDADES DE MEDIDA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G101" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G101'])) {echo $_SESSION['formularioHojas']['(G9)G101']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;101</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS COLORES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G102" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G102'])) {echo $_SESSION['formularioHojas']['(G9)G102']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;102</td>                    
                                                <td> <label for="">&nbsp;&nbsp;FIGURAS GEOMÉTRICAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G103"  value="<?php if (isset($_SESSION['formularioHojas']['(G9)G103'])) {echo $_SESSION['formularioHojas']['(G9)G103']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;103</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS DEL 0 AL 10</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G155"  value="<?php if (isset($_SESSION['formularioHojas']['(G9)G155'])) {echo $_SESSION['formularioHojas']['(G9)G155']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;155</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS DEL 1 AL 100</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G255" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G255'])) {echo $_SESSION['formularioHojas']['(G9)G255']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;255</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NUMBERS - NÚMEROS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G256" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G256'])) {echo $_SESSION['formularioHojas']['(G9)G256']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;256</td>                    
                                                <td> <label for="">&nbsp;&nbsp;COLORS - COLORES</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G390" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G390'])) {echo $_SESSION['formularioHojas']['(G9)G390']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;390</td>                    
                                                <td> <label for="">&nbsp;&nbsp;FIGURAS GEOMÉT. PLANAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G391" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G391'])) {echo $_SESSION['formularioHojas']['(G9)G391']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;391</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉT. CON VOL.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G406" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G406'])) {echo $_SESSION['formularioHojas']['(G9)G406']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;406</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA SUMA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G407" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G407'])) {echo $_SESSION['formularioHojas']['(G9)G407']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;407</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA RESTA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G408" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G408'])) {echo $_SESSION['formularioHojas']['(G9)G408']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;408</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA MULTIPLICACIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G409" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G409'])) {echo $_SESSION['formularioHojas']['(G9)G409']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;409</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LA DIVISIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G419" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G419'])) {echo $_SESSION['formularioHojas']['(G9)G419']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;419</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS CONJUNTOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G420" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G420'])) {echo $_SESSION['formularioHojas']['(G9)G420']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;420</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LOS CONJUNTOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G433" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G433'])) {echo $_SESSION['formularioHojas']['(G9)G433']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;433</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS ROMANOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G437" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G437'])) {echo $_SESSION['formularioHojas']['(G9)G437']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;437</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉTRICOS 1</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G438" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G438'])) {echo $_SESSION['formularioHojas']['(G9)G438']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;438</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉTRICOS 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G439" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G439'])) {echo $_SESSION['formularioHojas']['(G9)G439']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;439</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉTRICOS 3</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G440" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G440'])) {echo $_SESSION['formularioHojas']['(G9)G440']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;440</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉTRICOS 4</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G441" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G441'])) {echo $_SESSION['formularioHojas']['(G9)G441']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;441</td>                    
                                                <td> <label for="">&nbsp;&nbsp;CUERPOS GEOMÉTRICOS 5</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G449" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G449'])) {echo $_SESSION['formularioHojas']['(G9)G449']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;449</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS 1 Y 2</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G450" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G450'])) {echo $_SESSION['formularioHojas']['(G9)G450']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;450</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS 3 Y 4</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G451" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G451'])) {echo $_SESSION['formularioHojas']['(G9)G451']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;451</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS 5 Y 6</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G452" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G452'])) {echo $_SESSION['formularioHojas']['(G9)G452']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;452</td>                   
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS 7 Y 8</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G453" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G453'])) {echo $_SESSION['formularioHojas']['(G9)G453']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;453</td>                    
                                                <td> <label for="">&nbsp;&nbsp;NÚMEROS 9 Y 10</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G454" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G454'])) {echo $_SESSION['formularioHojas']['(G9)G454']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;454</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR AMARILLO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G455" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G455'])) {echo $_SESSION['formularioHojas']['(G9)G455']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;455</td>                   
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR ROJO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G456" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G456'])) {echo $_SESSION['formularioHojas']['(G9)G456']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;456</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR AZUL</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G457" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G457'])) {echo $_SESSION['formularioHojas']['(G9)G457']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;457</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR MORADO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G458" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G458'])) {echo $_SESSION['formularioHojas']['(G9)G458']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;458</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR VERDE</label> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G9)G459" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G459'])) {echo $_SESSION['formularioHojas']['(G9)G459']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;459</td>                    
                                                <td> <label for="">&nbsp;&nbsp;OBJETOS COLOR ANARANJADO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G460" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G460'])) {echo $_SESSION['formularioHojas']['(G9)G460']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;460</td>                    
                                                <td> <label for="">&nbsp;&nbsp;ARRIBA-ABAJO-ABIERTO-CERR.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G461" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G461'])) {echo $_SESSION['formularioHojas']['(G9)G461']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;461</td>                    
                                                <td> <label for="">&nbsp;&nbsp;LLENO-VACÍO-GRANDE-PEQ.</label> </td>
                                            </tr>
                                        </table>

                                    </div>
                                    <div class="col-sm-4 ">          
                                        <table class="textI">                
                                            <tr>
                                                <td> <input  type="number" name="(G9)G462" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G462'])) {echo $_SESSION['formularioHojas']['(G9)G462']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;462</td>                    
                                                <td> <label>&nbsp;&nbsp;DERE.-IZQUIER.-DENTR-FUER.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G463" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G463'])) {echo $_SESSION['formularioHojas']['(G9)G463']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;463</td>                    
                                                <td> <label>&nbsp;&nbsp;CERCA-LEJOS-ADELAN-ATRÁS.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G464" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G464'])) {echo $_SESSION['formularioHojas']['(G9)G464']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;464</td>                    
                                                <td> <label>&nbsp;&nbsp;FRÍO-CALIENT.-PESADO-LIVIANO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G465" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G465'])) {echo $_SESSION['formularioHojas']['(G9)G465']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;465</td>                    
                                                <td> <label>&nbsp;&nbsp;LISO-ÁSPER-DELGADO-GRUE</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G475" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G475'])) {echo $_SESSION['formularioHojas']['(G9)G475']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;475</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS COLOR BLANCO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G476" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G476'])) {echo $_SESSION['formularioHojas']['(G9)G476']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;476</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS COLOR NEGRO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G477" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G477'])) {echo $_SESSION['formularioHojas']['(G9)G477']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;477</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS COLOR ROSADO.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G478" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G478'])) {echo $_SESSION['formularioHojas']['(G9)G478']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;478</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS COLOR CAFÉ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G501" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G501'])) {echo $_SESSION['formularioHojas']['(G9)G501']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;501</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA OVALADA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G502" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G502'])) {echo $_SESSION['formularioHojas']['(G9)G502']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;502</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA REDONDA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G503" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G503'])) {echo $_SESSION['formularioHojas']['(G9)G503']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;503</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA CUADRADA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G504" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G504'])) {echo $_SESSION['formularioHojas']['(G9)G504']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;504</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJET. FORMA RECTANGULAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G505" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G505'])) {echo $_SESSION['formularioHojas']['(G9)G505']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;505</td>                    
                                                <td> <label>&nbsp;&nbsp;BJET. FORMA TRIANGULAR</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G506" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G506'])) {echo $_SESSION['formularioHojas']['(G9)G506']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;506</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA DE ROMBO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G507" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G507'])) {echo $_SESSION['formularioHojas']['(G9)G507']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;507</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA CILÍNDRICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G9)G508" value="<?php if (isset($_SESSION['formularioHojas']['(G9)G508'])) {echo $_SESSION['formularioHojas']['(G9)G508']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;508</td>                    
                                                <td> <label>&nbsp;&nbsp;OBJETOS FORMA CÓNICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> 10.- FISICA Y QUÍMICA</td>                  

                                            </tr>
                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita"> ENERGÍA - LUZ CALOR</td>                  

                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G10)GO1"value="<?php if (isset($_SESSION['formularioHojas']['(G10)GO1'])) {echo $_SESSION['formularioHojas']['(G10)GO1']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;O1</td>                    
                                                <td> <label>&nbsp;&nbsp;CLASES DE ENERGÍA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)GO2"value="<?php if (isset($_SESSION['formularioHojas']['(G10)GO2'])) {echo $_SESSION['formularioHojas']['(G10)GO2']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;O2</td>                    
                                                <td> <label>&nbsp;&nbsp;INST. LABORATORIO DE FÍSICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G110"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G110'])) {echo $_SESSION['formularioHojas']['(G10)G110']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;110</td>                    
                                                <td> <label>&nbsp;&nbsp;EL MICROSCOPIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G165"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G165'])) {echo $_SESSION['formularioHojas']['(G10)G165']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;165</td>                    
                                                <td> <label>&nbsp;&nbsp;INST. LABORATOR. DE QUÍMICA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G288"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G288'])) {echo $_SESSION['formularioHojas']['(G10)G288']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;288</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ÁTOMO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G315"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G315'])) {echo $_SESSION['formularioHojas']['(G10)G315']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;315</td>                    
                                                <td> <label>&nbsp;&nbsp;LA MATERIA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G322"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G322'])) {echo $_SESSION['formularioHojas']['(G10)G322']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;322</td>                    
                                                <td> <label>&nbsp;&nbsp;LA ENERGÍA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G323"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G323'])) {echo $_SESSION['formularioHojas']['(G10)G323']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;323</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LUZ</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G324"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G324'])) {echo $_SESSION['formularioHojas']['(G10)G324']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;324</td>                    
                                                <td> <label>&nbsp;&nbsp;EL CALOR - LA TEMPERATURA</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G375"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G375'])) {echo $_SESSION['formularioHojas']['(G10)G375']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;375</td>                    
                                                <td> <label>&nbsp;&nbsp;LA ELECTRICIDAD</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G10)G434"value="<?php if (isset($_SESSION['formularioHojas']['(G10)G434'])) {echo $_SESSION['formularioHojas']['(G10)G434']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;434</td>                    
                                                <td> <label>&nbsp;&nbsp;EL SONIDO</label> </td>
                                            </tr>

                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>                                                          
                                                <td colspan="3" class="textC negrita">11.- GRAMÁTICA</td>                  
                                            </tr>
                                            <tr>
                                                <td></td>                  
                                                <td> &nbsp;&nbsp;</td>                    
                                                <td> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)GM1"value="<?php if (isset($_SESSION['formularioHojas']['(G11)GM1'])) {echo $_SESSION['formularioHojas']['(G11)GM1']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;M1</td>                    
                                                <td> <label>&nbsp;&nbsp;ALBABETO INGLÉS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G104"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G104'])) {echo $_SESSION['formularioHojas']['(G11)G104']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;104</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ABECEDARIO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G105"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G105'])) {echo $_SESSION['formularioHojas']['(G11)G105']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;105</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "A"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G106"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G106'])) {echo $_SESSION['formularioHojas']['(G11)G106']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;106</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "E"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G107"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G107'])) {echo $_SESSION['formularioHojas']['(G11)G107']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;107</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "I"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G108"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G108'])) {echo $_SESSION['formularioHojas']['(G11)G108']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;108</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "O"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G109"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G109'])) {echo $_SESSION['formularioHojas']['(G11)G109']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;109</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "U"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G131"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G131'])) {echo $_SESSION['formularioHojas']['(G11)G131']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;131</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "B"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G132"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G132'])) {echo $_SESSION['formularioHojas']['(G11)G132']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;132</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "C"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G133"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G133'])) {echo $_SESSION['formularioHojas']['(G11)G133']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;133</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "CH"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G134"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G134'])) {echo $_SESSION['formularioHojas']['(G11)G134']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;134</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "D"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G135"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G135'])) {echo $_SESSION['formularioHojas']['(G11)G135']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;135</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "F"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G136"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G136'])) {echo $_SESSION['formularioHojas']['(G11)G136']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;136</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "G"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G137"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G137'])) {echo $_SESSION['formularioHojas']['(G11)G137']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;137</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "H"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G138"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G138'])) {echo $_SESSION['formularioHojas']['(G11)G138']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;138</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "J"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G139"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G139'])) {echo $_SESSION['formularioHojas']['(G11)G139']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;139</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "K"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G140"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G140'])) {echo $_SESSION['formularioHojas']['(G11)G140']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;140</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "L"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G141"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G141'])) {echo $_SESSION['formularioHojas']['(G11)G141']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;141</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "LL"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G142"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G142'])) {echo $_SESSION['formularioHojas']['(G11)G142']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;142</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "M"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G143"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G143'])) {echo $_SESSION['formularioHojas']['(G11)G143']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;143</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "N"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G144"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G144'])) {echo $_SESSION['formularioHojas']['(G11)G144']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;149</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "Ñ"</label> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G11)G145"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G145'])) {echo $_SESSION['formularioHojas']['(G11)G145']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;145</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "P"</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G11)G146"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G146'])) {echo $_SESSION['formularioHojas']['(G11)G146']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;146</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "Q"</label> </td>
                                            </tr> <tr>
                                                <td> <input  type="number" name="(G11)G147"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G147'])) {echo $_SESSION['formularioHojas']['(G11)G147']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;147</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "R"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G148"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G148'])) {echo $_SESSION['formularioHojas']['(G11)G148']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;148</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "S"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G149"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G149'])) {echo $_SESSION['formularioHojas']['(G11)G149']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;149</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "T"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G150"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G150'])) {echo $_SESSION['formularioHojas']['(G11)G150']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;150</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "V"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G151"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G151'])) {echo $_SESSION['formularioHojas']['(G11)G151']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;151</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "W"</label> </td>
                                            </tr>

                                            <tr>
                                                <td> <input  type="number" name="(G11)G152"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G152'])) {echo $_SESSION['formularioHojas']['(G11)G152']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;152</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "X"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G153"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G153'])) {echo $_SESSION['formularioHojas']['(G11)G153']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;153</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "Y"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G154"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G154'])) {echo $_SESSION['formularioHojas']['(G11)G154']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;154</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "Z"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G442"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G442'])) {echo $_SESSION['formularioHojas']['(G11)G442']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;442</td>                    
                                                <td> <label>&nbsp;&nbsp;LA LETRA "RR"</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G254"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G254'])) {echo $_SESSION['formularioHojas']['(G11)G254']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;1111</td>                    
                                                <td> <label>&nbsp;&nbsp;THE ALPHABET - EL ALFABETO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G257"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G257'])) {echo $_SESSION['formularioHojas']['(G11)G257']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;257</td>                    
                                                <td> <label>&nbsp;&nbsp;THE GREETINGS - SALUDOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G258"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G258'])) {echo $_SESSION['formularioHojas']['(G11)G258']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;258</td>                    
                                                <td> <label>&nbsp;&nbsp;FEELINGS - SENTIMIENTOS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G376"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G376'])) {echo $_SESSION['formularioHojas']['(G11)G376']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;376</td>                    
                                                <td> <label>&nbsp;&nbsp;LAS 5 VOCALES JUNTAS</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G404"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G404'])) {echo $_SESSION['formularioHojas']['(G11)G404']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;404</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ABECEDARIO CURSIVO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G405"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G405'])) {echo $_SESSION['formularioHojas']['(G11)G405']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;405</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ABECEDARIO GÓTICO</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G410"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G410'])) {echo $_SESSION['formularioHojas']['(G11)G410']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;410</td>                    
                                                <td> <label>&nbsp;&nbsp;EL SUSTANTIVO - CLASIFICIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G411"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G411'])) {echo $_SESSION['formularioHojas']['(G11)G411']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;411</td>                    
                                                <td> <label>&nbsp;&nbsp;EL SUSTAN GÉNERO Y NÚM.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G412"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G412'])) {echo $_SESSION['formularioHojas']['(G11)G412']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;412</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ADJETIVO - CLASIFICIÓN</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G413"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G413'])) {echo $_SESSION['formularioHojas']['(G11)G413']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;413</td>                    
                                                <td> <label>&nbsp;&nbsp;EL ADJET-GÉNERO Y NÚM.</label> </td>
                                            </tr>
                                            <tr>
                                                <td> <input  type="number" name="(G11)G414"value="<?php if (isset($_SESSION['formularioHojas']['(G11)G414'])) {echo $_SESSION['formularioHojas']['(G11)G414']; }?>"  min="5" max="9999" step="5" > </td>                    
                                                <td> &nbsp;&nbsp;414</td>                    
                                                <td> <label>&nbsp;&nbsp;EL VERBO - CLASIFICACIÓN</label> </td>
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