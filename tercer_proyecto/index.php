<!doctype html>
<html>
<head>
	<title>Tercer proyecto</title>
</head>
<body>
		<form>
			<label>Nombre</label>
			<input type="text" name="nombre" required>
			<input type="submit">	
		</form>

		<?php 
			if(isset($_GET['nombre'])){
				$saludo = "Hola ".$_GET['nombre'];
			}else{
				$saludo = "Hola Mundo";
			}

		 ?>

		 <h2><?php echo $saludo; ?></h2>
</body>
</html>