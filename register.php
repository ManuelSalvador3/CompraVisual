<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/php.css">
  <link rel="stylesheet" href="css/contacto.css" />
  <link rel = "icon" href ="imagenes/logo.png" type = "image/x-icon" /> 
</head>
<body style="background-image: url('imagenes/fondos/fondocontacto.jpg')">
  <div class="headerreg">
  	<h2>Registro</h2>
  </div>
	
  <form method="post" action="register.php">
      <?php include('errors.php'); ?>
    <div class="input-group">
  	  <label>Nombre</label>
  	  <input type="text" name="nombre" value="<?php echo $nombre; ?>">
    </div>
    <div class="input-group">
  	  <label>Apellido</label>
  	  <input type="text" name="apellido" value="<?php echo $apellido; ?>">
    </div>
    <div class="input-group">
  	  <label>Teléfono</label>
  	  <input type="text" name="telefono" value="<?php echo $telefono; ?>">
      </div>
    <div class="input-group">
  	  <label>Domicilio</label>
  	  <input type="text" name="domicilio" value="<?php echo $domicilio; ?>">
    </div>    
  	<div class="input-group">
  	  <label>Nombre de usuario</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirma contraseña</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrarse</button>
  	</div>
  	<p>
  		¿Ya estas registrado? <a href="login.php">Iniciar sesión</a>
  	</p>
  </form>
</body>
</html>