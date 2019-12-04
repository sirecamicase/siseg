<?php

include 'conn.php';


 if($id=$_GET['idusu']==1){
 	echo "<script>
                alert('No se puede eliminar al Super Administrador ');
                window.history.go(-1);
                </script>";	

 }else{


 $id=$_GET['idusu'];
mysqli_query($conne," DELETE FROM usuario WHERE idusu= '".$id."' ");			
header("location:usuarios.php");
}
  ?>
 