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
	//ensenyar lo que te el usuari en concret amb el que hem accedit, pagina de inici validada:
	
	    $perfil = mysql_query("SELECT * FROM users WHERE name='".$_POST['name']."'") or die(mysql_error());
	    if(mysql_num_rows($perfil)) { 
	        $row = mysql_fetch_array($perfil);
	        $id = $row["idusers"];
	        $name = $row["name"];
	        $email = $row["email"];
	        $rol = $row["rol"];
			
			
			
	?>
	        <strong>Nom:</strong> <?=$name?><br />
	        <strong>Email:</strong> <?=$email?><br />
	        <strong>Rol:</strong> <?=$rol?><br />
	        
            
	     
	<?php
	    }else {
	?>
	        <p>El perfil no existeix</p>
	<?php
	    }
	?> 
</body>
</html>