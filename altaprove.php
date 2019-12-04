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
                                <form class="" action="nuevoprove.php" method="post" >

                                  Nombre: <input class="inp" type="text" name="nombreproveedor" minlength="4" maxlength="50" required pattern="[A-Z a-z]+"   autocomplete="off" ><br>
                                  RFC: <input class="inp" type="text" name="RFC"  autocomplete="off" minlength="10" maxlength="13" required pattern="[A-Za-z0-9]+"><br>
                                  Domicilio: <input class="inp" type="text" name="domicilio"  autocomplete="off" minlength="15" maxlength="60" required pattern="[A-Za-z0-9.-#]+"><br>
                                  Num. Contacto: <input class="inp" type="tel" name="contacto" minlength="7" maxlength="25" required pattern="[0-9-]+" autocomplete="off"><br>
                                  Correo: <input class="inp" type="email" name="correo"  autocomplete="off" minlength="10" maxlength="50" required pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"><br>


                                  <b>Tipo de Proveedor:
                                  <select name="selec"> 
                                    <option value="0" >Seleccione:</option>
                                    <?php
                                    $query= mysqli_query ($conne,"SELECT * FROM tipoprovedor");
                                    while ($valores = mysqli_fetch_array($query)) {
                                    echo '<option value="'.$valores[idtipprove].'">'.$valores[tipo].'</option>';
                                     }?>
                                  </select></b><br>


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
  
  input[type=text]:focus{
    border-color:Blue;
    box-shadow:0 0 8px 0 dodgerBlue;

}
</style>
<style >

  input[type=email]{
    width:40%;
    border:2px solid #aaa;
    border-radius:3px;
    margin:2px 0;
    outline:none;
    padding:2px;
    box-sizing:border-box;
    transition:.3s;
}
  
  input[type=email]:focus{
    border-color:Blue;
    box-shadow:0 0 8px 0 dodgerBlue;

}
</style>






<?php
include 'piepagina.php';
?>