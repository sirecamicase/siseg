<?php


include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';

include 'conn.php';
$id=$_GET['idproveedor'];
$resultado = mysqli_query($conne, "SELECT * FROM proveedor where idproveedor='".$id."'");

	while ($fila=mysqli_fetch_assoc($resultado)){

?>		


<div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3> 

                                  <input type="hidden" name="txtid" value="<?php echo $filas['idproveedor'] ?>">
                                  Nombre: <input class="inp" type="text" name="nombre"  autofocus autocomplete="off"><br>
                                  RFC: <input class="inp" type="text" name="RFC" autofocus autocomplete="off"><br>
                                  Num. Contacto: <input class="inp" type="text" name="contacto"  autocomplete="off"><br>
                                  Tipo de Proveedor: <input class="inp" type="" name="tipoproveedor" autofocus autocomplete="off"><br>


                                  <input class="btn btn-sucess" type="submit" name="" value="Actualizar">
                                </form>
                                <?php } ?>



                              </h3>
                              <!--Fin Contenido-->
                           </div>
                        </div>    
                    

                      </div>


                      <?php
                      		$idp=$_GET['txtid'];
                      		$nombre=$_GET['nombre'];
                      		$rfc=$_GET['RFC'];
                      		$contac=$_GET['contacto'];

                      		if ($nombre!=null||$rfc!=null||$contac!=null) {
                      			$result2 = mysqli_query($conne, "UPDATE proveedor set Nombre='".$nombre."',
                      				RFC='".$rfc."', Num. Contacto='".$contac."' where id= '".$idp."' ");
                      			if($nombre=1){

                      				header("location:bajaprove.php");
                      			}


                      		}

                      ?>


<?php
include 'piepagina.php';
?>