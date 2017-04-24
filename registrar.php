<?php 
if (isset($_POST['ced'])){	
	include "conexion.php";
	mysql_query("INSERT INTO `usuarios`(`nombre`, `cedula`, `user`, `email`, `pass`,`tipo`) VALUES ('".$_POST['nom']."','".$_POST['ced']."','".$_POST['email']."','".$_POST['email']."','".md5($_POST['pass'])."','".$_POST['tipo']."')", $conexion) or die(mysql_error());
	echo "<script>alert('Registro con exito - Inicia sesion para obtener el codigo');window.location='inc_ses.php'</script>";
}
?>
<html>
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
		<title>COMEDOR INSTITUCIONAL</title>
	</head>
	<body>
        <div class="card card-container">
			<h1><center>Registrarse</center></h1><br><br>
            <form class="form-signin" action="registrar.php" method="POST">
				Cedula:  <br>
				<input type="tel" id="ced" name="ced" class="form-control" placeholder="Cedula" required autofocus>
				Nombre:<br>
				<input type="text" id="nom" name="nom" class="form-control" placeholder="Nombre" required>
                Email:<br>
				<input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                Contraseña: <br>
				<input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña" required>
				Tipo:<br>
				<select  class="form-control"  name="tipo">
					<option value="1">Estudiante</option>
					<option value="2">Profesor</option>
					<option value="1">Estudiante Becado (Dirigirse al encargado)</option>
				</select>
				<br><br><button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Registrarse</button>
            </form>
            <a href="olvido.php" class="forgot-password">Olvido la contraseña</a><br>
            <a href="index.php" class="forgot-password">Inicio</a>
        </div>
	</body>
	<script src="https://code.jquery.com/jquery-1.10.1.js"></script>
    <script src="js/scale.fix.js"></script>
    <script src="js/formatter.js"></script>
    <script>
      var creditInput = document.getElementById('ced');
      if (creditInput) {
        new Formatter(creditInput, {
            'pattern': '{{9}}-{{9999}}-{{9999}}'
        });
      }
    </script>
</html>