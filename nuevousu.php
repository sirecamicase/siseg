<?php




include 'session.php';
include 'conn.php';


$nombre = $_POST['nombre'];
$usu = $_POST['usuario'];
$clave = $_POST['pass'];
$tipo = $_POST['tipousu'];



if (!$conne) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "<script>
                alert('Datos Guardados Correctamente ');
                window.history.go(-1);
                </script>";
$result2 = mysqli_query($conne, "INSERT INTO usuario (nombre, usuario, clave, idtipousuario) VALUES ( '".$nombre."', '".$usu."', '".$clave."', '".$tipo."')" );

 mysqli_close($conne);


?>