<?php
	session_start();
	include('acces_db.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	    if(empty($_SESSION['name'])) {         
	?>
	        <form action="perfil.php" method="post">
	            <label>Usuari:</label><br />
	            <input type="text" name="name" /><br />
	            <label>Contrasenya:</label><br />
	            <input type="password" name="pass" /><br />
	            <a href="">Recuperar contrasenya</a><br />
	            <input type="submit" name="enviar" value="Ingresar" />
	        </form>                    
	<?php
	    }else {
	?>
	        <p>Hola <strong><?=$_SESSION['name']?></strong> | <a href="logout.php">Sortir</a></p>
	<?php
	    }
	?>  
</body>
</html>