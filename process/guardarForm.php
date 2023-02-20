<?php

session_start();
$lugar = $_POST[enviar];
$ruta = "";
if ($lugar == 1) {
    $ruta = "2&hoja=1";
} else if ($lugar == 2) {
    $ruta = "2&hoja=2";
} else if ($lugar == 3) {
    $ruta = "2&hoja=3";
} else if ($lugar == 4) {
    $ruta = "2&hoja=4";
} else if ($lugar == "Seguir al Paso 3") {
    $ruta = "3";
}

function guardarDatos() {


    foreach ($_POST as $campo => $valor) {
        // $j++;
        if ($valor != "" && isset($valor)) {
            $_SESSION['formularioHojas'][$campo] = $valor;
        }
    }
}

guardarDatos();

echo $_SESSION[ruta];

header("Location:../index.php?paso=$ruta");
