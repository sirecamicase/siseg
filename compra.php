<?php
//Reanudamos la sesión
 
include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'conn.php';
include 'contenido.php';

?>
<!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3>
                                <div >
                              	<form action="nuevocompra.php" method="post">

                                 <b> No.de cotizacion: <input class="inp" type="text" name="numcotizacion"  required pattern="[0-9]+" autofocus autocomplete="off" value=""><br></b>

                                  Proyecto: <input class="inp" type="text" name="nomproyecto" minlength="4" maxlength="35"required pattern="[A-Z a-z]+" autofocus autocomplete="off" value=""></b> 
                                  <br>

                                  Proveedor: <select name="prove"> <option value="0">Seleccionar:</option>
                                    <?php
                                    $query= mysqli_query ($conne,"SELECT * FROM proveedor");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idproveedor].'">'.$valores[nombreproveedor].'</option>';
                                     }?>
                                  </select> <br>

                                  No.de factura: <input class="inp" type="text" name="numfactura" required pattern="[0-9]+" autocomplete="off" value=""> <br>

                                  Tipo de Moneda: 
                                  <select name="tipomo"> <option value="0">Seleccionar:</option>
                                    <?php
                                    $query= mysqli_query ($conne,"SELECT * FROM moneda");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idmoneda].'">'.$valores[tipomoneda].'</option>';
                                     }?>
                                  </select><br>

                                  Subtotal: <input class="inp" type="text" name="subtotal" required pattern="[0-9]+" autocomplete="off" value=""> <br>

                                  Total: <input class="inp" type="text" name="total" required pattern="[0-9]+" autocomplete="off" value=""> <br>

                                  Fecha de compra: <input class="inp" type="date" name="fechacompra" min="2019-06-01" max="2024-12-31" value=""> <br>

                                  Fecha de Pago: <input class="inp" type="date" name="fechapago" min="2019-06-01" max="2024-12-31" value=""> <br>

                                  Dias de Credito: <input class="inp" type="text" name="diascredito" minlength="1" maxlength="3" required pattern="[0-9]+" autocomplete="off" value=""> <br>

                                  Fecha de Liquidacion: <input class="inp" type="text" name="fechaquesepago" 
                                  required pattern="[a-z A-Z 0-9_ ]+" placeholder="Escribe " value=""> <br>


                                  <b>Status: 
                                  <select name="estatus"> <option value="0">Seleccione:</option>
                                    <?php
                                    $query2= mysqli_query ($conne,"SELECT * FROM status");
                                    while ($valores2 = mysqli_fetch_array($query2)) {
                                    echo '<option value="'.$valores2[idstatus].'">'.$valores2[status].'</option>';
                                     }?>
                                  </select>
                                  </b>

                                  <br><br>
                                  
                                  Ingresa el archivo: <input name="archivo" type="file"> <br>

                                  <input class="btn btn-sucess" type="submit" name="guardar" value="Guardar">
                              </form>
                            </div>
                          </h3>
                          <!--Fin Contenido-->
                      </div>
                  </div>
              </div>

<style >

  input[type=text]{
    width:10%;
    border:2px solid #aaa;
    border-radius:3px;
    margin:2px 0;
    outline:none;
    padding:3px;
    box-sizing:border-box;
    transition:.3s;
}
  
  input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;

}

</style>
 


<?php

include 'piepagina.php';
?>