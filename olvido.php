<?php 
if (isset($_POST['cedula'])){
		include "conexion.php";
		$queEmp = "SELECT * FROM usuarios where cedula = '".$_POST["cedula"]."' and email = '".$_POST["email"]."' ";
		$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
		$totEmp = mysql_num_rows($resEmp);
		if (mysql_num_rows($resEmp) != 0){
			$queEmp = "UPDATE `usuarios` SET `pass`='".md5("admin")."' WHERE cedula = '".$_POST["cedula"]."' and email = '".$_POST["email"]."' ";
			$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
			echo "<script>alert('Verificado con exito - Inicia sesion con el password: admin y el email: ".$_POST["email"]." ');
			window.location='inc_ses.php'</script>";
		}
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
			<h1><center>
			Registrarse
			</center></h1><br><br>
            <form class="form-signin" action="olvido.php" method="POST">
				Cedula: <br>
				<input type="tel" id="ced" name="cedula" class="form-control" placeholder="Digite su cedula" required autofocus>
                Email: <br>
				<input type="email" name="email" class="form-control" placeholder="Digite su email" required autofocus>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Recuperar</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
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