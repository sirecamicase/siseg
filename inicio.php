<?php
//Reanudamos la sesión 

include 'session.php';
include 'encabesado.php';
include 'menu.php';
include 'contenido.php';
?>



		<div class="box-body">
		 <div class="row">
		 	<div class="col-md-12">
		 	 <!--Contenido-->


		 	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="img/siseg.jpg" alt="">
        </div>
        <div class="item">
            <img src="img/siseg2.jpg" alt="">
        </div>
        <div class="item">
            <img src="img/siseg3.jpg" alt="">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-circle-left glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-circle-right glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
		 	 <script type="text/javascript">
		 	 	$('.carousel').carousel({
		 	 		interval: 2000,
		 	 		pause:true,
		 	 		wrap:false
		 	 	});
		 	 </script>     
		 	 <!--Fin Contenido-->
		 	 </div>
		 	</div>
		 </div>




<?php
include 'piepagina.php';

?>







      
 
