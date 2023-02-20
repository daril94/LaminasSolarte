<?PHP

session_start();
require_once 'mostrarDatos.php';

$provincia = $_SESSION['Vendedor'];

ob_start();
mostrarDatos(1);
$count = 0;
$datos = ob_get_contents();
$dat = explode(";", $datos);
$data = str_replace("G", "", $dat, $contador);
natsort($data);
date_default_timezone_set("America/Bogota");
$fechaActual = date('d-m-Y');
$horaActual = date('H:i:s');
$pedidoW = $_SESSION['Pedido'];
$nombreW = utf8_decode($_SESSION['Nombre']);
$emailW = isset($_SESSION['Email']) ? $_SESSION['Email'] : "";
$telefonoW = $_SESSION['Telefono'];
$direccionW = utf8_decode($_SESSION['Direccion']);
$ccW = $_SESSION['CcRuc'];
$vendedorW = utf8_decode($_SESSION['Vendedor']);
$sectorW = utf8_decode($_SESSION['Sector']);



ob_end_clean();


/* En los encabezados indicamos que se trata de un documento de MS-WORD
  y en el nombre de archivo le ponemos la extensión RTF. */


/*  Comenzamos a armar el documento  */
$output = "{\\rtf1";   //<-- Iniciamos un documento RTF

$output .= "{\\fs24 \\b NUMERO DEL PEDIDO        \\b0 $pedidoW   }";
$output .= "\\par ";  //<-- ENTER
$output .= "\\par ";  //<-- ENTER
$output .= "{\\fs24 \\b Fecha        \\b0  $fechaActual}";
$output .= "\\par ";  //<-- ENTER
$output .= "{\\fs24 \\b Hora        \\b0  $horaActual}";
$output .= "\\par ";  //<-- ENTER 
$output .= "\\par ";  //<-- ENTER 
$output .= "{\\fs24 \\b DATOS DEL COMPRADOR  }";
$output .= "\\par ";  //<-- ENTER  
$output .= "\\par ";  //<-- ENTER 
$output .= "{\\fs24 \\b Nombre             \\b0      $nombreW}";
$output .= "\\par ";  //<-- ENTER    
$output .= "{\\fs24 \\b Telefono            \\b0      $telefonoW}";
$output .= "\\par ";  //<-- ENTER   
$output .= "{\\fs24 \\b Direccion            \\b0    $direccionW}";
$output .= "\\par ";  //<-- ENTER   
$output .= "{\\fs24 \\b CI-RUC               \\b0   $ccW}";
$output .= "\\par ";  //<-- ENTER   
if ($provincia != 'Provincia') {
    $output .= "{\\fs24 \\b Vendedor               \\b0 $vendedorW}";
    $output .= "\\par ";  //<-- ENTER 
    $output .= "{\\fs24 \\b Tipo de Entrega    \\b0 $sectorW}";
    $output .= "\\par ";  //<-- ENTER 
    $output .= "\\par ";  //<-- ENTER 
    $output .= "\\par ";  //<-- ENTER 
}

$output .= "{\\fs24 \\b TOTAL DEL PEDIDO   }";
$output .= "\\par ";  //<-- ENTER 
if ($_SESSION['Laminas'] > 0) {
    $output .= "{\\fs24 \\b Laminas   \\b0   $_SESSION[Laminas]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['Casas'] > 0) {
    $output .= "{\\fs24 \\b Casas Armables   \\b0   $_SESSION[Casas]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['TablaElementos'] > 0) {
    $output .= "{\\fs24 \\b Tabla de elementos  \\b0   $_SESSION[TablaElementos]}";
    $output .= "\\par ";  //<-- ENTER 
}if ($_SESSION['Cartilla4Operaciones'] > 0) {
    $output .= "{\\fs24 \\b Cartilla 4 operaciones  \\b0   $_SESSION[Cartilla4Operaciones]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['Cucas'] > 0) {
    $output .= "{\\fs24 \\b Cucas   \\b0   $_SESSION[Cucas]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['CroquisA4'] > 0) {
    $output .= "{\\fs24 \\b Croquis A4   \\b0   $_SESSION[CroquisA4]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['Afiches'] > 0) {
    $output .= "{\\fs24 \\b Afiches   \\b0   $_SESSION[Afiches]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['BilletesMonedas'] > 0) {
    $output .= "{\\fs24 \\b Billetes   \\b0   $_SESSION[BilletesMonedas]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['Libro28FG'] > 0) {
    $output .= "{\\fs24 \\b Libro 28 Figuras   \\b0   $_SESSION[Libro28FG]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['MapasFullColor'] > 0) {
    $output .= "{\\fs24 \\b Mapas Color A3   \\b0   $_SESSION[MapasFullColor]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['LibrosColorear'] > 0) {
    $output .= "{\\fs24 \\b Libros colorear   \\b0   $_SESSION[LibrosColorear]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['CuerposSueltos'] > 0) {
    $output .= "{\\fs24 \\b Cuerpos Sueltos   \\b0   $_SESSION[CuerposSueltos]}";
    $output .= "\\par ";  //<-- ENTER 
}
if ($_SESSION['MuestrasSueli'] > 0) {
    $output .= "{\\fs24 \\b Muestras suelos   \\b0   $_SESSION[MuestrasSueli]}";
    $output .= "\\par ";  //<-- ENTER 
}


$output .= "\\par ";  //<-- ENTER 
$output .= "{\\fs24 \\b PEDIDO REALIZADOO   }";
$output .= "\\par ";  //<-- ENTER
foreach ($data as $ds) {
    $count++;
    $output .= "{\\fs24 $ds   }";
    $output .= "\\par ";  //<-- ENTER ;
//echo $count;    
    /* if ($count % 4 == 0) {
      $output .= "\\par ";  //<-- ENTER ;
      } */
}






$output .= "}"; //<-- Terminador del RTF

/*  Enviamos el documento completo a la salida  */
file_put_contents("../wordGenerado/pedido$pedidoW.doc", $output);


require_once 'pdfMail.php';
