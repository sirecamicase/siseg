<?php
//Reanudamos la sesión 

include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';

include 'conn.php';
$result = mysqli_query($conne, "SELECT * FROM compras");


?>
<!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3>
                                <div class="table-responsive">
                                  <table id="userList" class="table table-bordered table-striped table-hover nowrap" style="width:100%">
                                    <thead class="thead-light">
                                    <tr>
                                          <th>Num.Cotizacion</th>
                                          <th>Proyecto</th>
                                          <th>Proveedor</th>
                                          <th>Num.Factura</th>
                                          <th>Moneda</th>
                                          <th>Subtotal</th>
                                          <th>Total</th>
                                          <th>Fec.Compra</th>
                                          <th>DiasCredito</th>
                                          <th>Factura</th>
                                          <th>Status</th>
                                          <th>Config</th>
                                      </tr>
                                    </thead>

                                    <?php while ($filas=mysqli_fetch_assoc($result)){ ?>
                                      <tr>
                                          <td><?php echo $filas['numcotizacion']?> </td>
                                          <td><?php echo $filas['nomproyecto']?> </td>
                                          <td><?php echo $filas['idproveedor']?> </td>
                                          <td><?php echo $filas['numfactura']?> </td>
                                          <td><?php echo $filas['idtipomoneda']?> </td>
                                          <td><?php echo $filas['subtotal']?> </td>
                                          <td><?php echo $filas['total']?> </td>
                                          <td><?php echo $filas['fechacompra']?> </td>
                                          <td><?php echo $filas['diascredito']?> </td>
                                          <td><?php echo $filas['archivo']?> </td>
                                          <td><?php echo $filas['idtipostatus']?> </td>
                                          <td>
                                            
                                              <a href="eliminarcompra.php?idcompras=<?php echo $filas['idcompras']?>" onclick="return confirm('¿Desea eliminar la compra?')">Eliminar</a>
                                          </td>
                                      </tr>
                                    <?php }?>
                                    </table>
                                  </div>
                                
                              </h3>
                              <!--Fin Contenido-->
                           </div>
                        </div>                        
                      </div>





<?php

include 'piepagina.php';
?>


