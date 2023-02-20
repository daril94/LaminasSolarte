<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define("USER", "r2jv0u0fk4cs");
define("SERVER", "localhost");
define("BD", "LaminasSolarte");
define("PASS", "Solarte1.");


function conectar_db() {
  
    $conn = new mysqli(SERVER, USER, PASS, BD);
    if ($conn->connect_errno) {
        echo ("Error el la conexión" . $conn->connect_errno);
        exit;
    }
    return $conn;
}




function consultar ($query){
     $conn = \conectar_db();
   return $conn->query($query);
    
    
}

function insertar($tabla, $campos, $valores){
    $conn = \conectar_db();
    $consulta = "insert into $tabla ($campos) values ($valores)";
    return  $conn->query($consulta);    
    
}

function eliminar($tabla, $campos, $valores){
    
    
}