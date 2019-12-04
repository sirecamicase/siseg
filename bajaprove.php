<?php
//Reanudamos la sesión 

include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';

include 'conn.php';
$result = mysqli_query($conne, "SELECT * FROM proveedor");


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
                                          <th>ID</th>
                                          <th>Nombre</th>
                                          <th>RFC</th>
                                          <th>Domicilio</th>
                                          <th>Num. Contacto</th>
                                          <th>Correo</th>
                                          <th>Config</th>
                                      </tr>
                                    </thead>

                                    <?php while ($filas=mysqli_fetch_assoc($result)){ ?>
                                      <tr>
                                          <td><?php echo $filas['idproveedor']?> </td>
                                          <td><?php echo $filas['nombreproveedor']?> </td>
                                          <td><?php echo $filas['RFC']?> </td>
                                          <td><?php echo $filas['domicilio']?> </td>
                                          <td><?php echo $filas['contacto']?> </td>
                                          <td><?php echo $filas['correo']?> </td>
                                          <td>
                                            
                                              <a href="eliminar.php?idproveedor=<?php echo $filas['idproveedor']?>" onclick="return confirm('¿Desea eliminar este proveedor?')">Eliminar</a>
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


