<?php
session_start();
require_once '../library/connDB.php';


$resultado = consultar("select * from Pedido order by pedidoID desc limit 1");

if (!$resultado) {
    throw new Exception("Error de consulta");
} else {
    while ($filas = $resultado->fetch_assoc()) {
        $ultimaLamina = $filas['pedidoID'] + 1;
    }
}

function ceros($num) {
    if ($num < 10) {
        $ceros = '00000';
    } else if ($num >= 10 && $num < 100) {
        $ceros = '0000';
    } else if ($num >= 100 && $num < 1000) {
        $ceros = '000';
    } else if ($num >= 1000 && $num < 10000) {
        $ceros = '00';
    } else if ($num >= 10000 && $num < 100000) {
        $ceros = '0';
    }
    return $ceros;
}

$ceros = ceros($ultimaLamina);

$_SESSION['Pedido'] = $ceros . $ultimaLamina;

function guardarPedidoUsuario() {
    $sName = $_SESSION['Nombre'];
    $sEmail = $_SESSION['Email'];
    $iTelefono = $_SESSION['Telefono'];
    $sDireccion = $_SESSION['Direccion'];
    $iCcRuc = $_SESSION['CcRuc'];
    $sRetiro = $_SESSION['Entrega'];
    $sVendedor = $_SESSION['Vendedor'];
    $campos = ('nombreUsuario,emailUsuario,telefonoUsuario,direccionUsuario,ccRucUsuario,entregaUsuario, vendedorUsuario');
    $valores = "'$sName', '$sEmail','$iTelefono','$sDireccion', '$iCcRuc','$sRetiro','$sVendedor'";
    insertar('Pedido', $campos, $valores);
}

function guardarPedidoFormulario() {
    $id = $_SESSION['Pedido'];
    foreach ($_SESSION['formularioHojas'] as $campo => $a) {
        //$i++;
        if ($a >= 1) {
            $campos = ('pedidoID,codigo,cantidad');
            $valores = "'$id', '$campo','$a'";
            insertar('laminasPedido', $campos, $valores);
        }
    }
}

function guardarSumatoria() {
    $id = $_SESSION['Pedido'];

    if ($_SESSION['Laminas'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Laminas', '$_SESSION[Laminas]'";
        insertar('sumatorioPedido', $campos, $valores);
    }



    if ($_SESSION['Casas'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Casas', '$_SESSION[Casas]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['TablaElementos'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','TablaElementos', '$_SESSION[TablaElementos]'";
        insertar('sumatorioPedido', $campos, $valores);
    }


    if ($_SESSION['Cartilla4Operaciones'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Cartilla4Operaciones', '$_SESSION[Cartilla4Operaciones]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['MapasFullColor'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','MapasFullColor', '$_SESSION[MapasFullColor]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['CroquisA4'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','CroquisA4', '$_SESSION[CroquisA4]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['LibrosColorear'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','LibrosColorear', '$_SESSION[LibrosColorear]'";
        insertar('sumatorioPedido', $campos, $valores);
    }
    if ($_SESSION['CuerposSueltos'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','CuerposSueltos', '$_SESSION[CuerposSueltos]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['BilletesMonedas'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','BilletesMonedas', '$_SESSION[BilletesMonedas]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['Libro28FG'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Libro28FG', '$_SESSION[Libro28FG]'";
        insertar('sumatorioPedido', $campos, $valores);
    }
    if ($_SESSION['MuestrasSueli'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','MuestrasSueli', '$_SESSION[MuestrasSueli]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['Cucas'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Cucas', '$_SESSION[Cucas]'";
        insertar('sumatorioPedido', $campos, $valores);
    }

    if ($_SESSION['Afiches'] >= 1) {
        $campos = ('pedidoID,nombre,cantidad');
        $valores = "'$id','Afiches', '$_SESSION[Afiches]'";
        insertar('sumatorioPedido', $campos, $valores);
    }
}

\guardarPedidoUsuario();
\guardarPedidoFormulario();
\guardarSumatoria();

require_once 'word.php';
?>

<html>
    <body>
        <img src="../assets/img/cargando.gif" alt=""/>

    </body>

</html>