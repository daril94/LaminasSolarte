<?php

//session_start();
$_SESSION['Laminas'] = 0;
$_SESSION['Casas'] = 0;
$_SESSION['TablaElementos'] = 0;
$_SESSION['Cartilla4Operaciones'] = 0;
$_SESSION['MapasFullColor'] = 0;
$_SESSION['CroquisA4'] = 0;
$_SESSION['LibrosColorear'] = 0;
$_SESSION['CuerposSueltos'] = 0;
$_SESSION['BilletesMonedas'] = 0;
$_SESSION['Libro28FG'] = 0;
$_SESSION['MuestrasSueli'] = 0;
$_SESSION['Cucas'] = 0;
$_SESSION['Afiches'] = 0;
$_SESSION['Sumatoria'] = 0 ;

function sumatoria() {
    /*
      $iLaminas = 0;
      $iCasas = 0;
      $iTablaElementos = 0;
      $iMapasFullColor = 0;
      $iCroquisA4 = 0;
      $iLibrosColorear = 0;
      $iCuerposSueltos = 0;
      $iBilletesMonedas = 0;
      $iLibro28FG = 0;
      $iMuestrasSueli = 0;
      $iCucas = 0;
      $iAfiches = 0;
      $iCartilla4Operaciones = 0;
     */

    foreach ($_SESSION['formularioHojas'] as $campo => $a) {
        if ($a > 0 &&$a<10000) {
           
            if ($campo[0] == '(') {
                $_SESSION['Laminas'] += $a;
            } else if ($campo[0] == 'A' && $campo[1] == 'f') {
                $_SESSION['Afiches'] += $a;
            }else if ($campo[0] == 'A' && $campo[1] != 'f') {
                $_SESSION['Casas'] += $a;
            } else if ($campo[0] == 'L' && $campo[1] == 'i') {
                $_SESSION['LibrosColorear'] += $a;
            } else if ($campo[0] == 'C' && $campo[1] == 'r') {
                $_SESSION['CroquisA4'] += $a;
            }  else if ($campo[0] == 'M' && $campo[1] == 'a') {
                $_SESSION['MapasFullColor'] += $a;
            } else if ($campo[0] == 'B' && $campo[1] != 'i') {
                $_SESSION['Cucas'] += $a;
            } else if ($campo[0] == 'C' && $campo[1] == 'u') {
                $_SESSION['CuerposSueltos'] += $a;
            } else if ($campo[0] == 'L' && $campo[1] == '2') {
                $_SESSION['Libro28FG'] += $a;
            } else if ($campo[0] == 'M' && $campo[1] == 'u') {
                $_SESSION['MuestrasSueli'] += $a;
            } else if ($campo[0] == 'C' && $campo[1] == 'a') {
                $_SESSION['Cartilla4Operaciones'] += $a;
            } else if ($campo[0] == 'T' && $campo[1] == 'a') {
                $_SESSION['TablaElementos'] += $a;
            } else if ($campo[0] == 'B' && $campo[1] == 'i') {
                $_SESSION['BilletesMonedas'] += $a;
            }
        }
    }
    
    
     $_SESSION['Sumatoria'] = $_SESSION['Laminas']+ $_SESSION['Casas'] + $_SESSION['TablaElementos'] + $_SESSION['Cartilla4Operaciones'] + 
             $_SESSION['MapasFullColor'] + $_SESSION['CroquisA4'] + $_SESSION['LibrosColorear'] + $_SESSION['CuerposSueltos']  + 
             $_SESSION['BilletesMonedas'] + $_SESSION['Libro28FG'] + $_SESSION['MuestrasSueli'] + $_SESSION['Cucas'] + 
                $_SESSION['Afiches'] +  $_SESSION['Sumatoria'] ;
}
