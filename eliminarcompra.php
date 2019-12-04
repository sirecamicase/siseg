<?php

include 'conn.php';

 $id=$_GET['idcompras'];
mysqli_query($conne," DELETE FROM compras WHERE idcompras= '".$id."' ");

header("location:compralista.php");



  ?>