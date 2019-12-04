<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<link rel="shortcut icon" href="img/admin.png">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		
			<?php
			// Connection info. file
			include 'conn.php';	
			
			// Connection variables
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// data sent from form login.html 
			

			$usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
            $tipousu=$_POST['idtipousuario'];
			
			// Query sent to database
			$result = mysqli_query($conn, "SELECT * FROM usuario WHERE usuario='$usuario' and clave='$clave'");		


			
			// Variable $row hold the result of the query
			
			$filas=mysqli_num_rows($result);
			
			
			if ($filas>0) {	
				$fila = mysqli_fetch_assoc($result); 
    	        

				$_SESSION['loggedin'] = true;
				$_SESSION['usuario'] = $usuario;
				$_SESSION['usuario'] = $fila["idtipousuario"];	

				if ($fila["idtipousuario"]==1) 	
					

				header("location:inicio.php");		

				else				
					header("location:inicio.php");					
			
			} else {

				echo "<script>
                alert('Usuario o contrasena incorrectos ');
                window.history.go(-1);
                </script>";		
			}	

			?>

			
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>