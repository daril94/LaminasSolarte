<?php

session_start();
define("USER", "root");
define("SERVER", "localhost");
define("BD", "LaminasSolarte");
define("PASS", "");


$conn = new mysqli(SERVER, USER, PASS, BD);
if ($conn->connect_error) {
    die("conexion fallida: " . $conn->connect_error);
}

$salida = "";

$query = "SELECT * FROM datosLaminas WHERE nombreLamina NOT LIKE '' LIMIT 0";

if (isset($_POST['consulta'])) {
    $q = $conn->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM datosLaminas WHERE nombreLamina LIKE '%$q%' OR codigoLamina LIKE '%$q%'";
}

$resultado = $conn->query($query);

if ($resultado->num_rows > 0) {
    $salida .= "<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>codigoLamina</td>
    					<td>nombreLamina</td>
    					<td>paginaLamina</td>
    					<td>seccionLamina</td>
                                </tr>

    			</thead>
    			

    	<tbody>";

    while ($fila = $resultado->fetch_assoc()) {
        $salida .= "<tr>
    					<td>" . $fila['codigoLamina'] . "</td>
    					<td>" . $fila['nombreLamina'] . "</td>
    					<td>" . $fila['paginaLamina'] . "</td>
    					<td>" . $fila['seccionLamina'] . "</td>    					
    				</tr>";
    }
    $salida .= "</tbody></table>";
} else {
    $salida .= "";
}


echo $salida;

$conn->close();
?>