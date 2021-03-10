<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" href="css/dash.css" />
	<link rel="stylesheet" href="css/contacto.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
</head>
<body style="background-image: url('imagenes/fondos/dash.jpg')">
	<?php 
	require_once('server.php'); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
	?>
			<!-- logged in user information -->
			<?php
				if (isset($_SESSION['username'])) {
					$user = $_SESSION['username'];
					$result = $db->query("SELECT nombre, apellido, telefono, domicilio, username, email FROM users WHERE username= '$user' ");
					while($row = $result->fetch_assoc()){
						$username = $row['username']; 
						$nombre = $row['nombre'];
						$apellido = $row['apellido'];
						$email = $row['email'];
						$telefono = $row['telefono'];
						$domicilio = $row['domicilio'];
				}
			}

				?>

	<!--Barra de navegación [Catalogo, Ofertas, Contacto e Inicar Sesión]-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">CompraVisual</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="catalogo.html"
              >Catalogo<span class="sr-only"></span
            ></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ofertas.html">Ofertas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html">Contacto</a>
          </li>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarCollapse"
          >
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar Sesion</a>
            </li>
          </div>
        </ul>
      </div>
    </nav>
	
	<!--DASHBOARD-->
	<div class="container bootstrap snippets bootdey" style="margin-top:50px">
		<div class="panel-body inf-content bg-white">
			<div class="row justify-content-center" style="margin-top:20px">
				<div class="col-md-4">
					<img alt="" style="width:auto;" title="" class="img-circle img-thumbnail isTooltip" src="imagenes/avatar.png" data-original-title="Usuario"> 
				</div>
				<div class="col-md-6">
					<strong>Información</strong><br>
					<div class="table-responsive">
					<table class="table table-user-information">
						<tbody>
							<tr>    
								<td>
									<strong>
										<span class="glyphicon glyphicon-user  text-primary"></span>    
										Nombre                                                
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $nombre; ?>     
								</td>
							</tr>
							<tr>        
								<td>
									<strong>
										<span class="glyphicon glyphicon-cloud text-primary"></span>  
										Apellido                                                 
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $apellido; ?>  
								</td>
							</tr>

							<tr>        
								<td>
									<strong>
										<span class="glyphicon glyphicon-bookmark text-primary"></span> 
										Nombre de usuario                                                
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $username; ?> 
								</td>
							</tr>

							<tr>         
								<td>
									<strong>
										<span class="glyphicon glyphicon-eye-open text-primary"></span> 
										Role                                                
									</strong>
								</td>
								<td class="text-primary">
									Usuario
								</td>
							</tr>
							<tr>        
								<td>
									<strong>
										<span class="glyphicon glyphicon-envelope text-primary"></span> 
										Email                                                
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $email; ?>  
								</td>
							</tr>
							<tr>        
								<td>
									<strong>
										<span class="glyphicon glyphicon-envelope text-primary"></span> 
										Teléfono                                               
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $telefono; ?>  
								</td>
							</tr> 
							<tr>        
								<td>
									<strong>
										<span class="glyphicon glyphicon-envelope text-primary"></span> 
										Domicilio                                                
									</strong>
								</td>
								<td class="text-primary">
								<?php echo $domicilio; ?>  
								</td>
							</tr>                     
						</tbody>
					</table>
					</div>
				</div>
			</div>
			<a href="index.html" class="btn btn-info" role="button" style="margin-bottom: 30px; margin-left: 40px">Logout</a>
			<a href="deleteaccount.php" class="btn btn-danger" role="button" style="margin-bottom: 30px">Borrar cuenta</a>
		</div>
	</div>            
	<!--//////////////////////////////////////Scripts de Bootstrap//////////////////////////////////-->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
</body>
</html>