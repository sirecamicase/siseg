<?php
//Reanudamos la sesión 


include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';

?>
<!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3>
                              	<form class="" action="nuevocompra.php" method="post">

                                 No.de cotizacion: <input class="inp" type="text" name="num.cotizacion" required pattern="[0-9]+" autofocus autocomplete="off" value=""><br>
                                  Proyecto: <input class="inp" type="text" name="idproyecto" autocomplete="off" value=""><br>
                                  Proveedor: <input class="inp" type="text" name="idproveedor" autocomplete="off" value=""><br>
                                  No.de factura: <input class="inp" type="text" name="numfactura" required pattern="[0-9]+" autocomplete="off" value=""><br>
                                  Tipo de Moneda: <select> <option>Peso Mexicano</option>
                                                           <option>Dolar</option>
                                                  </select><br>
                                  Total: <input class="inp" type="text" name="total" required pattern="[0-9]+" autocomplete="off" value=""><br>
                                  Fecha de compra: <input class="inp" type="date" name="fechacompra" min="2019-06-01" max="2025-06-31" value=""><br>
                                  Fecha de Pago: <input class="inp" type="date" name="fechapago" min="2019-06-01" max="2025-06-31" value=""><br>
                                  Dias de Credito: <input class="inp" type="text" name="diascredito" minlength="1" maxlength="3" required pattern="[0-9]+" autocomplete="off" value=""><br>
                                  Fecha de Liquidacion: <input class="inp" type="date" name="fechaquesepago" 
                                  min="2019-06-01" max="2025-06-31" value=""><br>
                                  Status: <select> <option>Pagado</option>
                                                   <option>Sin Pagar</option>
                                                   <option>Abonado</option>
                                                   <option>Surtido Pendiente</option>
                                                  </select><br> <br>

                                  <input class="boton" type="submit" name="inicio" value="Guardar">
                              </form>
                          </h3>
                          <!--Fin Contenido-->
                      </div>
                  </div>
              </div>

<style >

  input[type=text]{
    width:40%;
    border:2px solid #aaa;
    border-radius:3px;
    margin:2px 0;
    outline:none;
    padding:2px;
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