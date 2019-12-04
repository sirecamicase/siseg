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
                                
                              </h3>
                              <!--Fin Contenido-->
                           </div>
                        </div>                        
                      </div>





<?php

include 'piepagina.php';
?>
