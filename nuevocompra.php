<?php

include 'session.php';
include 'conn.php';


$coti = $_POST['numcotizacion'];
$proye = $_POST['nomproyecto'];
$prove = $_POST['prove'];
$factura = $_POST['numfactura'];
$moneda = $_POST['tipomo'];
$subtotal = $_POST['subtotal'];
$total = $_POST['total'];
$fechcompra = $_POST['fechacompra'];
$fechpago = $_POST['fechapago'];
$diascre = $_POST['diascredito'];
$fechliquidacion = $_POST['fechaquesepago'];
$status = $_POST['estatus'];
$archivo= $_POST['archivo'];





if (!$conne) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "<script>
                alert('Datos Guardados Correctamente ');
                window.history.go(-1);
                </script>";*/
                
$result3 = mysqli_query($conne, "INSERT INTO compras (numcotizacion, nomproyecto, idproveedor, numfactura, idtipomoneda, subtotal, total, fechacompra, fechapago, diascredito, fechaquesepago, idtipostatus, archivo) VALUES ( '".$coti."', '".$proye."', '".$prove."', '".$factura."', '".$moneda."', '".$subtotal."', '".$total."', '".$fechcompra."', '".$fechpago."', '".$diascre."', '".$fechliquidacion."', '".$status."', '".$archivo."')" ); 

mysqli_close($conne);
  ?>