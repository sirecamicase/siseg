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

                                <form class="" action="nuevousu.php" method="post" >

                                  Nombre: <input class="inp" type="text" name="nombre"  minlength="4" maxlength="15" required pattern="[A-Z a-z]+" autofocus autocomplete="off" ><br>

                                  Usuario: <input class="inp" type="text" name="usuario" minlength="4" maxlength="15" required pattern="[A-Z a-z]+" autofocus autocomplete="off"><br>

                                  Clave: <input class="inp" type="password" name="pass"  autocomplete="off"><br>

                                  <b>Tipo usuario : 
                                  <select name="tipousu"> <option value="0">Seleccione:</option>
                                    <?php
                                    $query= mysqli_query ($conne,"SELECT * FROM tipousuario");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idtipousuario].'">'.$valores[tipo].'</option>';
                                     }?>
                                  </select></b>
                                  <br>
                                 

                                  <input class="btn btn-sucess" type="submit" name="guardar" value="Guardar">
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
    input[type=password]{
    width:40%;
    border:2px solid #aaa;
    border-radius:3px;
    margin:5px 0;
    outline:none;
    padding:5px;
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