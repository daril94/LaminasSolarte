
<html lang="es">
    <head>
        <title>Login Maxilaminas</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/stylesPan.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/laminas.js" type="text/javascript"></script>
    </head>



    <body style="background-image: url(assets/img/fondoForm1.jpg ); background-size:cover;" onload="cambiarHoja(); cambiarDivPasos()">             
        <div id="padre">    
           

            <div class="row">
                <div class="col-md-8 col-md-offset-2">                                       
                    <div class="lineOrangeTitle" style="font-size:px; background-color: black; color: white">
                        <p class="alignV"> 
                            Administracion
                        </p>
                    </div>     
                    <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                        <p class="alignV"> 
                            Educamos a través del arte
                        </p>
                    </div>
                    <!--Genera una linea azul--> 
                    <div class="lineBlue"> </div>
                    <div class="lineOrangeTitle" style="font-size:13px; background-color: whitesmoke; color: black;">
                        <p class="alignV"> 
                            Ingrese Credenciales
                        </p>
                    </div>
                    <br><br>
                    <!-- formulario de inicio de sesion-->
                    <form method="POST" action="process/validarInicio.php" style="text-align: center">
                        <input  class="input" type="email" name="emailAdmin" placeholder="User" required />
                        <br> <br> 
                        <input class="input" type="password" name="passAdmin" placeholder="Password" required/>
                        <br> <br>
                        <button   type="submit">Sign In</button>
                    </form>

                </div>

            </div>





        </div> 



    </body>

</html>
