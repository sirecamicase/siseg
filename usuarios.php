<?php


include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';

include 'conn.php';
$result = mysqli_query($conne, "SELECT * FROM usuario");



?>
<!-- /.box-header -->

                <div class="box-body">
                    <div class="row">
                      <div class="col-md-12">
                              <!--Contenido-->
                              <h3> 


                                <div class="table-responsive">
                                  <table id="userList" class="cell-border display compact" style="width:100%">
                                    <thead class="thead-light">
                                    <tr>
                                          <th>ID</th>
                                          <th>Nombre</th>
                                          <th>Usuario</th>  
                                          <th>Tipo Usuario</th>
                                          <th>Config</th>

                                      </tr>
                                    </thead>

                                    <?php while ($filas=mysqli_fetch_assoc($result)){ ?>
                                      <tr>
                                          <td><?php echo $filas['idusu']?> </td>
                                          <td><?php echo $filas['nombre']?> </td>
                                          <td><?php echo $filas['usuario']?> </td>
                                          <td><?php echo $filas['idtipousuario']?> </td>
                                          <td>                                              
                                             
                                              <a href="eliminarusu.php?idusu=<?php echo $filas['idusu']?>" onclick="return confirm('¿Desea eliminar este Usuario?')">Eliminar</a>
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


 