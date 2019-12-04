<?php
session_start();
?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>


            
            <li class="treeview">
              <a href="#">
                <i class="icon-truck"></i>
                <span>Proveedores</span>
                <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="altaprove.php"><i class="icon-user-plus"></i> Alta provedores </a></li>
                <li><a href="bajaprove.php"><i class="icon-user-minus"></i> Baja provedores </a></li>
              </ul>
            </li>


            
            <li class="treeview">
              <a href="#">
                <i class="icon-cart"></i>
                <span>Compras</span>
                 <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="compra.php"><i class="icon-coin-dollar"></i> Ingresa compra </a></li>
                <li><a href="detacompra.php"><i class="icon-profile"></i> Detalle de Compra  </a></li>
                <li><a href="compralista.php"><i class="icon-drive"></i> Compra Realizadas </a></li>

              </ul>
              
            </li>

            <li class="treeview">
              <a href="#">
                <i class="icon-barcode"></i>
                <span>Ventas</span>
                 <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="venta.php"><i class="icon-mug"></i> Realizar venta </a></li>
                <li><a href="detaventa.php"><i class="icon-profile"></i> Detalle de Venta  </a></li>
                <li><a href="ventalista.php"><i class="icon-clipboard"></i> Venta Realizada </a></li>
              </ul>

            </li>

            <li class="treeview">
              <a href="#">
                <i class="icon-folder-plus"></i> <span>Abono</span>
                <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="abono.php"><i class="icon-credit-card"></i> Abonar Cuenta</a></li>
                
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="icon-earth"></i> <span>Busqueda</span>
                <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="busqueda.php"><i class="icon-search"></i> Busqueda </a></li>
                
              </ul>
            </li>

          <?php

          if($_SESSION['usuario']==1){


          ?>
            <li class="treeview">
              <a href="#">
                <i class="icon-users"></i> <span>Usuarios</span>
                <i class="icon-circle-left fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="altausu.php"><i class="icon-user-check"></i> Altas Usuarios</a></li>
                <li><a href="usuarios.php"><i class="icon-user"></i> Bajas Usuarios</a></li>
                
              </ul>
            </li> 

           <?php  }
           ?>

            
          </ul>

          
        </section>
        <!-- /.sidebar -->
      </aside>