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