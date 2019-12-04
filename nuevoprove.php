<?php




include 'session.php';
include 'conn.php';


$nombre = $_POST['nombreproveedor'];
$RFC = $_POST['RFC'];
$domicilio = $_POST['domicilio'];
$numcontac = $_POST['contacto'];
$correo =$_POST['correo'];
$tipo =$_POST['selec'];





if (!$conne) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "<script>
                alert('Datos Guardados Correctamente ');
                window.history.go(-1);
                </script>";
$result = mysqli_query($conne, "INSERT INTO proveedor (nombreproveedor, RFC, domicilio, contacto, correo, idtipoprovedor) VALUES ( '".$nombre."', '".$RFC."', '".$domicilio."', '".$numcontac."', '".$correo."', '".$tipo."')" );
 

mysqli_close($conne);
  
  ?>


  
  