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
	    if(isset($_SESSION['name'])) {
	?>
	        Benvingut: <a href="perfil.php?id=<?=$_SESSION['idusers']?>"><strong><?=$_SESSION['name']?></strong></a><br />
	        <a href="logout.php">Tanca Sessio</a>
	<?php
	    }else {
	?>
			<a href="registre.php">Registrarse</a> | <a href="acces.php">Entrar</a>
	<?php
	    }
	?> 
</body>
</html>