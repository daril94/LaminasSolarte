<?php

session_start();

function guardarDatos($pasos) {
    if ($pasos == 1) {
        if (isset($_POST['Nombre'])) {
            $_SESSION ['Nombre'] = $_POST['Nombre'];
        }
        if (isset($_POST['Email'])) {
            $_SESSION ['Email'] = $_POST['Email'];
        }
        if (isset($_POST['Telefono'])) {
            $_SESSION ['Telefono'] = $_POST['Telefono'];
        }
        if (isset($_POST['Direccion'])) {
            $_SESSION ['Direccion'] = $_POST['Direccion'];
        }
        if (isset($_POST['CcRuc'])) {
            $_SESSION ['CcRuc'] = $_POST['CcRuc'];
        }
        if (isset($_POST['Vendedor'])) {
            $_SESSION ['Vendedor'] = $_POST['Vendedor'];
        }
        if (isset($_POST['Sector'])) {
            $_SESSION ['Sector'] = $_POST['Sector'];
        }
        if (isset($_POST['Entrega'])) {
            $_SESSION ['Entrega'] = $_POST['Entrega'];
        }
    }



    if ($pasos == 2) {
        foreach ($_POST as $campo => $valor) {
            // $j++;
            if ($valor != "" && isset($valor)) {
                $_SESSION['formularioHojas'][$campo] = $valor;
            }
        }
    }
}
