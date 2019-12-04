<?php

include 'conn.php';

 $id=$_GET['idproveedor'];
mysqli_query($conne," DELETE FROM proveedor WHERE idproveedor= '".$id."' ");

header("location:bajaprove.php");



  ?>