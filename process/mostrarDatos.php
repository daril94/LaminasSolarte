<?php

//session_start();
function mostrarDatos($id) {
    if ($id == 1) {
        foreach ($_SESSION['formularioHojas'] as $campo => $a) {
            //$i++;
            if ($a >= 1) {               
                echo $campo . "=" . $a.";";  
               
            }
        }
    }



    if ($id == 2) {
        foreach ($_SESSION['formularioDatos'] as $campo => $a) {
            //$i++;
            if ($a != "") {
                echo'<table>';
                echo'<tr>';
                echo'<th>';
                echo $campo;
                echo'</th>';
                echo'<td>';
                echo $a;
                echo'</td>';
                echo'</tr>';
                



                echo'<table>';
            }
        }
    }
    if ($id == 3) {
        foreach ($_SESSION['formularioSumatoria'] as $campo => $a) {
            //$i++;
            if ($a >= 5) {
                echo $campo . " = " . $a;
                echo "<br><br>";
            }
        }
    }
}


