<?php
	include('acces_db.php'); // incluimos el archivo de conexión a la Base de Datos
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	 <?php
	    if(isset($_POST['enviar'])) {
			 
	        	 $name = $_POST['name'];
	             $pass = $_POST['pass'];
				 $email = $_POST['email'];
				 $rol = $_POST['rol'];
				 
	                // insertem
$reg = mysql_query("INSERT INTO users (name, pass, email, rol) VALUES ('".$name."', '".$pass."', '".$email."','".$rol."')");
	                if($reg) {
	                    echo "Dades ingresades correctament";
	                }else {
	                    echo "Error entrada de dades:";
	                }
	            
	        
	    }else {
	?>
		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		    <label>Usuari:</label><br />
		    <input type="text" name="name" maxlength="15" /><br />
		    <label>Contrasenya:</label><br />
		    <input type="password" name="pass" maxlength="15" /><br />
		    <label>Confirmar Contrasenya:</label><br />
		    <input type="password" name="pass_conf" maxlength="15" /><br />
             <label>Email</label><br />
		    <input type="text" name="email" maxlength="40" /><br />
             <label>Rol</label><br />
		    <input type="text" name="rol" maxlength="15" /><br />
		    
		    <input type="submit" name="enviar" value="Registrar" />
		    <input type="reset" value="Borrar" />
		</form>
	<?php
	    }
	?> 
</body>
</html>